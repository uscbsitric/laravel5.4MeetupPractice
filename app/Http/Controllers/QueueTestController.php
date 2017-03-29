<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use App\User;
use App\Jobs\TestJob1;

class QueueTestController extends Controller
{
  public function queueTesting()
  {
    $user = User::find(1);
	$testVariable = "test value";
	
	dispatch(new TestJob1(array($user, $testVariable)));
	
	exit('done dispatching TestJob1');
  }
}