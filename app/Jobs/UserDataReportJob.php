<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\User;
use App\Activity;
use App\Income;
use niklasravnsborg\LaravelPdf\Facades\Pdf;
use App\Notifications\UserDataReportEmailNotification;
use Illuminate\Support\Facades\Notification;
use Throwable;

class UserDataReportJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
		$this->to = "francescoforno@gmail.com";
        $this->sender = "noreply@scuolavoloastra.it";
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $report_name = $this->to.'_'.$user->name.'_'.uniqid();
            $path = storage_path($_ENV['APP_URL'] . '/tmp/reports');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $data  = ['date' => $this->to];
            Notification::send($user, new UserDataReportEmailNotification($data, $attachment, $sender_email));

            return;
        } catch (Throwable $exception) {
            report($exception);
        }
    }
}
