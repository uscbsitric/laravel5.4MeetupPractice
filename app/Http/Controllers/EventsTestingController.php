<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

use App\User;
use Event;
use App\Events\TheBertrandSteppedIn;
use App\Events\FredzIsNowShowing;
use App\Events\DorylHasArrived;
use App\Events\LaravelMeetupPresentation;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class EventsTestingController extends Controller
{
  public function eventsTesting()
  {
    $user = User::find(1);
	
	$now = Carbon::now();
	echo "<pre>";
	echo "logic started at $now";
	Event::fire(new TheBertrandSteppedIn($user));

	$now = Carbon::now();
	echo "<pre>";
	echo "logic ended at $now";
  }
  
  public function eventsSubscriberTesting()
  {
    $user = User::find(1);
    Event::fire(new FredzIsNowShowing($user));
	Event::fire(new DorylHasArrived($user));
	
	echo "Check the logs for details";
  }
  
  public function queuedEvent()
  {
    $user = User::find(1);
	Event::fire(new LaravelMeetupPresentation($user));
	echo "Check the logs for details";
  }
}