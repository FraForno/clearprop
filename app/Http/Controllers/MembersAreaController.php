<?php

namespace App\Http\Controllers;

//use App\Activity;
//use App\Plane;
//use App\Type;
use App\User;
use Gate;
//use App\Events\ActivityCostCalculation;
//use App\Services\SplitCostService;
use App\Http\Controllers\Controller;
//use App\Http\Requests\MassDestroyActivityRequest;
//use App\Http\Requests\StoreActivityRequest;
//use App\Http\Requests\UpdateActivityRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class MembersAreaController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('members_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        /*if ($request->ajax()) {
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
        } */
        return view('app.membersarea.index');
    }
}
