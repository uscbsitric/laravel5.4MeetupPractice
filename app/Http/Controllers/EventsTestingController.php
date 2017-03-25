<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class EventsTestingController extends Controller
{
  public function eventsTesting()
  {
    echo "this is the eventsTesting() method.";
  }
}