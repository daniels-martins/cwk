<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\WelcomeEmailNotfication;
use Illuminate\Support\Facades\Notification;


class SendWelcomeEmail
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Verified $event)
    {
        // dd($event->user,'we got here, this shows that the listener for the Verified event is working');
        //
        $user = $event->user;
        Notification::sendNow($user, new WelcomeEmailNotfication());

        // Notification::send($user, new WelcomeEmailNotfication());
        // Notification::sendNow($user, new WelcomeEmailNotfication());
    }
}
