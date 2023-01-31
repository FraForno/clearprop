<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class UserDataReportEmailNotification extends Notification
{
    use Queueable;

	protected $data;
    protected $attachment;
    protected $sender;

    public function __construct($attachment, $sender)
    {
		$this->data = $data;
        $this->attachment = $attachment;
        $this->sender = $sender;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return $this->getMessage();
    }

    public function getMessage()
    {
        return (new MailMessage)
            ->subject(config('app.name') . ': Report visite mediche in scadenza')
            ->greeting('Buongiorno,')
            ->line(new HtmlString('In allegato il report delle visite mediche in scadenza entro il ' . '<strong>' . $this->data['date'] . '</strong>'))
            //->attach($this->attachment);
    }
}
