<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

use App\User;
use Event;
use App\Events\TheBertrandSteppedIn;
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
}