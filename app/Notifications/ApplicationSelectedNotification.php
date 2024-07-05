<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Razorpay\Api\Api;
use App\Models\Application; 
use App\Models\Startup; 
use Illuminate\Bus\Queueable;
use App\Models\Events;

class ApplicationSelectedNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
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
        //  $apikey=env('RAZORPAY_KEY');
        //  $secretkey=env('RAZORPAY_SECRET');

        //  $startup = Startup::find($this->model->startup_id);
        //  $event = Events::find($this->model->event_id);

        
        //  $api = new Api($apikey, $secretkey);
 
        //  $paymentLinkData = [
        //      'amount' => $event->fee * 100,
        //      'currency' => 'INR',
        //      'reference_id' => 'APP-'.$this->model->id,
        //      'description' => $event->name,
        //      'customer' => [
        //          'name' => $startup->founder_name,
        //          'email' => $notifiable->email,
        //          'contact' => $startup->contact_num,
        //      ],
             
             
        //      'notes' => [
        //          'startupname' => $startup->name,
        //          'eventname'=>$event->name,
        //      ]
            
        //  ];
 
        //  $paymentLink = $api->paymentLink->create($paymentLinkData);
 
        //  $this->model->paymentlink = $paymentLink->id;
        //  $this->model->save();
 
         return (new MailMessage)
             ->subject('Payment Link and Application Status Update')
             ->line('Your application has been selected.')
             ->action('Pay Now', route('user.application.show',$this->model->hid))
             ->line('Thank you for using our application!');
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
