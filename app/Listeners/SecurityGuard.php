<?php

namespace App\Listeners;

use App\Events\TheBertrandSteppedIn;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

// Event listeners receive the event instance in their handle method. 
// The event:generate command will automatically import the proper event class and type-hint the event on the handle method. 
// Within the handle method, you may perform any actions necessary to respond to the event:
class SecurityGuard
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
		$logMessage = "Non Queued event: User with ID: $id gave his autograph to the guard and finished at " . $now;
		Log::info($logMessage);
    }
}
