<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use App\User;
use Illuminate\Support\Facades\Log;

class TestJob1 implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
	
	protected $user;
	protected $testVariable;

    public function __construct( $parameters )
    {
        $this->user = $parameters[0];
		$this->testVariable = $parameters[1];
    }

    public function handle()
    {
        sleep(10);
		$id = $this->user->id;
		$testVariable = $this->testVariable;
		$message = "User ID: $id and testVariable: $testVariable";
        Log::info($message);
    }
}
