<?php

namespace App\Providers;

use App\Providers\AlphabetCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Ccc;

class AlphabetCCreated
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
        $name = $event->alphabet->c_value;
        Ccc::create(['name' => $name]);
    }
}
