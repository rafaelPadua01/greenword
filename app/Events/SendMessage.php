<?php

namespace App\Events;

use App\User;
use App\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;



class SendMessage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

	
    /**
     * Create a new event instance.
     *
     * @return void
     */
	 
	 private $message;
	 private $user;
	 
    public function __construct(Message $message, User $user)
    {
       
		$this->message = $message;
		$this->user = $user;
		
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
		
        return new Channel('messsage.received.' . $this->user->id);
		
    }
	
	public function broadcastWith()
	{
		return $this->message->toArray();
	}
}
