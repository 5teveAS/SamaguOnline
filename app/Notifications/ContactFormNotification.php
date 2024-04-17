<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class ContactFormNotification extends Notification
{
    use Queueable;
    public $inputs;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->inputs=$inputs;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject(Lang::get('Notificación Para Nuevo Usuario Samagu'))
                    ->replyTo($this->inputs['email'],$this->inputs['password'])
                    ->greeting("Hola! {$this->inputs['user_name']}")
                    ->line("Este es su correo de ingreso: {$this->inputs['email']}")
                    ->line("Esta es su contraseña temporal asignada: {$this->inputs['password']}")
                    ->line("Favor cambiar su contraseña.");
                   # ->action('Cambiar contraseña', "");
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
