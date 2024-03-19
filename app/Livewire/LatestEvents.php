<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class LatestEvents extends Component
{
    public $events;

    public function mount()
    {
        $this->events = DB::table('events')->orderBy('created_at', 'desc')->get();
    }
    public function render()
    {
        return view('livewire.latest-events');
    }
}
