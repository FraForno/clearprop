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
		
		if ($request->input('toSelectedDate')) {			
			$from = Carbon::createFromFormat('Y-m-d', date('Y-m-d'))->format('Y-m-d');
            $to = Carbon::createFromFormat('Y-m-d', $request->input('toSelectedDate'))->format('Y-m-d');
			$to_file = Carbon::createFromFormat('Y-m-d', $request->input('toSelectedDate'))->format('Y_m_d');
			
			$usersWithMedicalDue = User::whereBetween('medical_due', [$from, $to])->orderBy('medical_due', 'asc')->get();
			
            $file = $_SERVER["DOCUMENT_ROOT"].$_ENV['APP_ROOT']."../tmp/report_scadenza_".$to_file.".csv";
			$csv = fopen($file, "w") or die("unable to open file");
			
			fwrite($csv, "NOME;COGNOME;E-MAIL;SCADENZA CERTIFICATO MEDICO\n");
			foreach ($usersWithMedicalDue as $user) {
                try {
					fwrite(	$csv, 
							$user->name.";".
							$user->surname.";".
							$user->email.";".
							$user->medical_due.
							"\n");
                } catch (Throwable $exception) {
					report($exception);
                    return false;
                }
            }			
			fclose($csv);
			
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
