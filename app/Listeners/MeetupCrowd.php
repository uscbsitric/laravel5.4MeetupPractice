<?php

namespace App\Listeners;

use App\Events\TheBertrandSteppedIn;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class MeetupCrowd
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
     * @param  TheBertrandSteppedIn  $event
     * @return void
     */
    public function handle(TheBertrandSteppedIn $event)
    {
        $user = $event->user;
		$id = $user->id;
		$now = Carbon::now();
		sleep(10);
		$logMessage = "Non Queued event: User with ID: $id flocked by the Meetup Crowd except me.  And they were finished with him at " . $now;
		Log::info($logMessage);
    }
}
