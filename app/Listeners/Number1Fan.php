<?php

namespace App\Listeners;
use Illuminate\Support\Facades\Log;

class Number1Fan
{
    public function dorylChant($event)
	{
	  $user = $event->user;
	  $chant = "who!!!! Doryll!! sign my chest please!";
	  Log::info('For Debugging purposes only --- user ID: '.$user->id);
	  Log::info($chant);
	}

    public function fredzChant($event)
	{
	  $user = $event->user;
	  $chant = "ninja moves!!!";
	  Log::error('For Debugging purposes only --- user ID: '.$user->id);
	  Log::info($chant);
	}

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen('App\Events\DorylHasArrived',
                        'App\Listeners\Number1Fan@dorylChant'
                       );

        $events->listen('App\Events\FredzIsNowShowing',
                        'App\Listeners\Number1Fan@fredzChant'
                       );
    }

}