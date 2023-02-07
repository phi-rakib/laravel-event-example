<?php

namespace App\Providers;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Alphabet;

class AlphabetCreated
{
    use Dispatchable, InteractsWithSockets;

    public $alphabet;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Alphabet $alphabet)
    {
        $this->alphabet = $alphabet;
        // dd($this->alphabet);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
