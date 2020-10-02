<?php

namespace App\Listeners\Auth;
use App\Mail\Auth\ActivationEmail;
use App\Events\Auth\UserRequestActivationEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendActivationEmail
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
     * @param  UserRequestActivationEmail  $event
     * @return void
     */
    public function handle(UserRequestActivationEmail $event)
    {
         if($event->user->active){
            return;
        }    

        \Mail::to($event->user->email)->send(new ActivationEmail($event->user));

        // dd($event);
    }
}
