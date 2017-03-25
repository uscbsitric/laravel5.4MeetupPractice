<?php

namespace App\Listeners;

use App\Events\TheBertrandSteppedIn;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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
        //
    }
}
