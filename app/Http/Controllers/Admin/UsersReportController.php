<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use App\User;
use App\Jobs\UserDataReportJob;
use Gate;
use Throwable;
use Carbon\Carbon;

class UsersReportController extends Controller
{
	public function index(Request $request)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
		
		if ($request->session()->has('toSelectedDate')) {			
			$from = Carbon::createFromFormat('Y-m-d', date('Y-m-d'))->format('Y-m-d');
            $to = Carbon::createFromFormat('Y-m-d', $request->input('toSelectedDate'))->format('Y-m-d');
			
			$usersWithMedicalDue = User::whereBetween('medical_due', [$from, $to])->get();
			
            $file = $_SERVER["DOCUMENT_ROOT"].$_ENV['APP_ROOT']."../tmp/report_scadenza.txt";
			$txt = fopen($file, "w") or die("unable to open file");
			fwrite($txt, "TEST");
			fclose($txt);
			
			header('Content-Description: File Transfer');
			header('Content-Disposition: attachment; filename='.basename($file));
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize($file));
			header("Content-Type: text/plain");
			readfile($file);
			
			exit();
		}
		
		return false;
    }

    public function individualReport($user)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user = User::findOrFail($user);

        $sender = auth()->user();

        try {
            UserDataReportJob::dispatch($user, now()->startOfYear(), now(), $sender);
            return back()->withToastSuccess(trans('global.sweetalert_success_sendreport'));
        } catch (Throwable $exception) {
            report($exception);
            return back()->withToastError($exception->getMessage());
        }
    }
}
