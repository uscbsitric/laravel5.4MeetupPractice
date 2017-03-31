<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\User;

class SomethingHappened implements ShouldBroadcast
{
    use SerializesModels;

    public $publicPropety1;
	public $publicPropety2;
	public $publicPropetyN;
	public $user;
	
	public function __construct(User $user)
	{
	  $this->user = $user;
	  $this->publicPropety1 = 'value 1';
	  $this->publicPropety2 = 'value 2';
	  $this->publicPropetyN = 'value 3';
	}

	public function broadcastOn()
	{
	  return new Channel('channel1');
	}
	
	public function broadcastAs()
	{
	  return 'event1';
	}
	
	public function broadcastWithDDDDDD()
	{
	  return ['additionalData1' => 'additional value 1',
	          'additionalData2' => 'additional value 2',
			  'additionalDataN' => 'additional value N'
	         ];
	}
}