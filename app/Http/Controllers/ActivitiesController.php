<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Plane;
use App\Type;
use App\User;
use Gate;
use App\Events\ActivityCostCalculation;
use App\Services\SplitCostService;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyActivityRequest;
use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ActivitiesController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('activity_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Activity::with(['user', 'type', 'copilot', 'instructor', 'plane'])
                ->select(sprintf('%s.*', (new Activity)->table));

            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->addColumn('split_color', '&nbsp;');
            $table->addColumn('warmup_color', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'activity_show';
                $editGate = 'activity_edit';
                $deleteGate = 'activity_delete';
                $crudRoutePart = 'activities';

                return view('partials.datatablesAppActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->addColumn('user_name', function ($row) {
                return $row->user ? $row->user->surname_name : '';
            });
			
			$table->addColumn('instructor_name', function ($row) {
                return $row->instructor ? $row->instructor->surname_name : '';
            });
			
			$table->addColumn('paid_check', function ($row) {
                return $row->paid == 0 ? 'No' : 'Si';
            });

            $table->addColumn('type_name', function ($row) {
                return $row->type ? $row->type->name : '';
            });

            $table->editColumn('type.active', function ($row) {
                return $row->type ? (is_string($row->type) ? $row->type : $row->type->active) : '';
            });

            $table->addColumn('plane_callsign', function ($row) {
                return $row->plane ? $row->plane->callsign : '';
            });

            $table->editColumn('plane.model', function ($row) {
                return $row->plane ? (is_string($row->plane) ? $row->plane : $row->plane->model) : '';
            });
            $table->editColumn('counter', function ($row) {
                return $row->counter_start . " / " . $row->counter_stop ? $row->counter_start . " / " . $row->counter_stop : "";
            });

            $table->editColumn('amount', function ($row) {
                return $row->amount ? $row->amount.config('panel.currency_sym') : "";
            });

            $table->editColumn('split_color', function ($row) {
                return $row->split_cost && ['1' => '#f0ad4e'][$row->split_cost] ? ['1' => '#f0ad4e'][$row->split_cost] : 'none';
            });

            $table->editColumn('warmup_color', function ($row) {
                return $row->engine_warmup && ['1' => '#0275d8'][$row->engine_warmup] ? ['1' => '#0275d8'][$row->engine_warmup] : 'none';
            });

            $table->rawColumns(['actions', 'placeholder', 'user', 'type', 'plane']);

            $table->orderColumn('event', 'event $1')->toJson();

            return $table->make(true);
        }

        return view('app.activities.index');
    }

    public function create()
    {
        abort_if(Gate::denies('activity_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('surname_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        /** $types = We created a dependend dropdown, so types list is loaded by jquery in TypeController */

        $copilots = User::all()->pluck('surname_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $instructors = User::whereHas('roles', function ($role) {
            $role->where('role_id', User::IS_INSTRUCTOR);
        })->pluck('surname_name', 'id')->prepend(trans('global.pleaseSelect'), '');
		
		//debug($instructors);

        $planes = Plane::all()->pluck('callsign', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('app.activities.create', compact('users', 'copilots', 'instructors', 'planes'));
    }

    public function store(StoreActivityRequest $request)
    {
        if ($request->split_cost == false) {
			$requestData = $request->all();
			$requestData ['counter_stop'] = intdiv($requestData ['counter_stop'], 60) + (($requestData ['counter_stop'] % 60) / 100);
            $activity = Activity::create($requestData);
            event(new ActivityCostCalculation($activity));
        }

        if ($request->split_cost == true && isset($request->copilot_id)) {
            $data = (new SplitCostService())->splitcost($request);

            /** Create two records */
            $activity_pilot = Activity::create($data['data_pilot']->all());
            event(new ActivityCostCalculation($activity_pilot));
            $activity_copilot = Activity::create($data['data_copilot']->all());
            event(new ActivityCostCalculation($activity_copilot));
        }

        return redirect()->route('app.activities.index');
    }

    public function edit(Activity $activity)
    {
        abort_if(Gate::denies('activity_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('surname_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $types = Type::where('active', '=', true)->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $copilots = User::all()->pluck('surname_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $instructors = User::whereHas('roles', function ($role) {
            $role->where('role_id', User::IS_INSTRUCTOR);
        })->pluck('surname_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $planes = Plane::all()->pluck('callsign', 'id')->prepend(trans('global.pleaseSelect'), '');

        $activity->load('user', 'copilot', 'instructor', 'plane', 'type');

        return view('app.activities.edit', compact('users', 'types', 'copilots', 'instructors', 'planes', 'activity'));
    }

    public function update(UpdateActivityRequest $request, Activity $activity)
    {
		$requestData = $request->all();
		$requestData ['counter_stop'] = intdiv($requestData ['counter_stop'], 60) + (($requestData ['counter_stop'] % 60) / 100);
        $activity->update($requestData);
        event(new ActivityCostCalculation($activity));

        return redirect()->route('app.activities.index');
    }

    public function show(Activity $activity)
    {
        abort_if(Gate::denies('activity_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $activity->load('user', 'copilot', 'instructor', 'plane', 'type');

        return view('app.activities.show', compact('activity'));
    }

    public function destroy(Activity $activity)
    {
        abort_if(Gate::denies('activity_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $activity->delete();

        return back();
    }

    public function massDestroy(MassDestroyActivityRequest $request)
    {
        Activity::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function getActivitiesByUser(Request $request)
    {
        abort_if(Gate::denies('activity_access', 'user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax() and !empty($request->user_id)) {
            try {
                $query = Activity::with(['user', 'type', 'instructor', 'plane'])
                    ->where('user_id', $request->user_id)
                    ->select(sprintf('%s.*', (new Activity)->table));

                $table = Datatables::of($query);

                $table->addColumn('placeholder', '&nbsp;');
                $table->addColumn('actions', '&nbsp;');
                $table->addColumn('split_color', '&nbsp;');
                $table->addColumn('warmup_color', '&nbsp;');

                $table->editColumn('actions', function ($row) {
                    $viewGate = 'activity_show';
                    $editGate = 'activity_edit';
                    $deleteGate = 'activity_delete';
                    $crudRoutePart = 'activities';

                    return view('partials.datatablesAdminActions', compact(
                        'viewGate',
                        'editGate',
                        'deleteGate',
                        'crudRoutePart',
                        'row'
                    ));
                });

                $table->editColumn('id', function ($row) {
                    return $row->id ? $row->id : "";
                });
                $table->addColumn('user_name', function ($row) {
                    return $row->user ? $row->user->name : '';
                });

                $table->addColumn('type_name', function ($row) {
                    return $row->type ? $row->type->name : '';
                });

                $table->editColumn('type.active', function ($row) {
                    return $row->type ? (is_string($row->type) ? $row->type : $row->type->active) : '';
                });

                $table->addColumn('plane_callsign', function ($row) {
                    return $row->plane ? $row->plane->callsign : '';
                });

                $table->editColumn('plane.model', function ($row) {
                    return $row->plane ? (is_string($row->plane) ? $row->plane : $row->plane->model) : '';
                });

                $table->editColumn('counter_start', function ($row) {
                    return $row->counter_start ? $row->counter_start : "";
                });
                $table->editColumn('counter_stop', function ($row) {
                    return $row->counter_stop ? $row->counter_stop : "";
                });

                $table->editColumn('amount', function ($row) {
                    return $row->amount ? $row->amount : "";
                });

                $table->editColumn('split_color', function ($row) {
                    return $row->split_cost && ['1' => '#f0ad4e'][$row->split_cost] ? ['1' => '#f0ad4e'][$row->split_cost] : 'none';
                });

                $table->editColumn('warmup_color', function ($row) {
                    return $row->engine_warmup && ['1' => '#0275d8'][$row->engine_warmup] ? ['1' => '#0275d8'][$row->engine_warmup] : 'none';
                });

                $table->rawColumns(['actions', 'placeholder', 'user', 'type', 'plane']);

                $table->orderColumn('event', 'event $1')->toJson();

                return $table->make(true);
            } catch (\Throwable $exception) {
                report($exception);
                return back()->withToastError($exception->getMessage());
            }
        }
        return false;
    }

    public function getActivitiesByUserAsInstructor(Request $request)
    {
        abort_if(Gate::denies('activity_access', 'user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax() and !empty($request->user_id)) {
            try {
                $query = Activity::with(['user', 'type', 'plane'])
                    ->where('instructor_id', $request->user_id)
                    ->select(sprintf('%s.*', (new Activity)->table));

                $table = Datatables::of($query);

                $table->addColumn('placeholder', '&nbsp;');
                $table->addColumn('actions', '&nbsp;');
                $table->addColumn('split_color', '&nbsp;');
                $table->addColumn('warmup_color', '&nbsp;');

                $table->editColumn('actions', function ($row) {
                    $viewGate = 'activity_show';
                    $editGate = 'activity_edit';
                    $deleteGate = 'activity_delete';
                    $crudRoutePart = 'activities';

                    return view('partials.datatablesAdminActions', compact(
                        'viewGate',
                        'editGate',
                        'deleteGate',
                        'crudRoutePart',
                        'row'
                    ));
                });

                $table->editColumn('id', function ($row) {
                    return $row->id ? $row->id : "";
                });
                $table->addColumn('user_name', function ($row) {
                    return $row->user ? $row->user->name : '';
                });

                $table->addColumn('type_name', function ($row) {
                    return $row->type ? $row->type->name : '';
                });

                $table->editColumn('type.active', function ($row) {
                    return $row->type ? (is_string($row->type) ? $row->type : $row->type->active) : '';
                });

                $table->addColumn('plane_callsign', function ($row) {
                    return $row->plane ? $row->plane->callsign : '';
                });

                $table->editColumn('plane.model', function ($row) {
                    return $row->plane ? (is_string($row->plane) ? $row->plane : $row->plane->model) : '';
                });

                $table->editColumn('counter_start', function ($row) {
                    return $row->counter_start ? $row->counter_start : "";
                });
                $table->editColumn('counter_stop', function ($row) {
                    return $row->counter_stop ? $row->counter_stop : "";
                });

                $table->editColumn('amount', function ($row) {
                    return $row->amount ? $row->amount : "";
                });

                $table->editColumn('split_color', function ($row) {
                    return $row->split_cost && ['1' => '#f0ad4e'][$row->split_cost] ? ['1' => '#f0ad4e'][$row->split_cost] : 'none';
                });

                $table->editColumn('warmup_color', function ($row) {
                    return $row->engine_warmup && ['1' => '#0275d8'][$row->engine_warmup] ? ['1' => '#0275d8'][$row->engine_warmup] : 'none';
                });

                $table->rawColumns(['actions', 'placeholder', 'user', 'type', 'plane']);

                $table->orderColumn('event', 'event $1')->toJson();

                return $table->make(true);
            } catch (\Throwable $exception) {
                report($exception);
                return back()->withToastError($exception->getMessage());
            }
        }
        return false;
    }

    public function getActivitiesByPlane(Request $request)
    {
        abort_if(Gate::denies('activity_access', 'plane_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax() and !empty($request->plane_id)) {
            try {
                $query = Activity::with(['user', 'plane'])
                    ->where('plane_id', $request->plane_id)
                    ->select(sprintf('%s.*', (new Activity)->table));

                $table = Datatables::of($query);

                $table->addColumn('placeholder', '&nbsp;');
                $table->addColumn('actions', '&nbsp;');
                $table->addColumn('split_color', '&nbsp;');
                $table->addColumn('warmup_color', '&nbsp;');

                $table->editColumn('actions', function ($row) {
                    $viewGate = 'activity_show';
                    $editGate = 'activity_edit';
                    $deleteGate = 'activity_delete';
                    $crudRoutePart = 'activities';

                    return view('partials.datatablesAdminActions', compact(
                        'viewGate',
                        'editGate',
                        'deleteGate',
                        'crudRoutePart',
                        'row'
                    ));
                });

                $table->editColumn('id', function ($row) {
                    return $row->id ? $row->id : "";
                });

                $table->addColumn('user_name', function ($row) {
                    return $row->user ? $row->user->name : '';
                });

                $table->editColumn('counter_start', function ($row) {
                    return $row->counter_start ? $row->counter_start : "";
                });

                $table->editColumn('counter_stop', function ($row) {
                    return $row->counter_stop ? $row->counter_stop : "";
                });

                $table->editColumn('amount', function ($row) {
                    return $row->amount ? $row->amount : "";
                });

                $table->editColumn('minutes', function ($row) {
                    return $row->minutes ? $row->minutes : "";
                });

                $table->editColumn('split_color', function ($row) {
                    return $row->split_cost && ['1' => '#f0ad4e'][$row->split_cost] ? ['1' => '#f0ad4e'][$row->split_cost] : 'none';
                });

                $table->editColumn('warmup_color', function ($row) {
                    return $row->engine_warmup && ['1' => '#0275d8'][$row->engine_warmup] ? ['1' => '#0275d8'][$row->engine_warmup] : 'none';
                });

                $table->rawColumns(['actions', 'placeholder', 'user', 'type', 'plane']);

                $table->orderColumn('event', 'event $1')->toJson();

                return $table->make(true);
            } catch (\Throwable $exception) {
                report($exception);
                return back()->withToastError($exception->getMessage());
            }
        }
        return false;
    }
}
