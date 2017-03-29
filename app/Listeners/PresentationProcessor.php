<?php

namespace App\Listeners;

use App\Events\LaravelMeetupPresentation;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PresentationProcessor
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
     * @param  LaravelMeetupPresentation  $event
     * @return void
     */
    public function handle(LaravelMeetupPresentation $event)
    {
		sleep(20);
        $user = $event->user;
		$id = $user->id;
		$logMessage = "Queued event: User with ID: $id for testing purposes and this is a 20 second process.";
		Log::info($logMessage);
    }
}
