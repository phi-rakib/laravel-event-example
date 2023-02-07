<?php

namespace App\Providers;

use App\Providers\AlphabetCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Aaa;

class AlphabetACreated implements ShouldQueue
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
     * @param  \App\Providers\AlphabetCreated  $event
     * @return void
     */
    public function handle(AlphabetCreated $event)
    {
        $name = $event->alphabet->a_value;
        Aaa::create(['name' => $name]);
    }
}
