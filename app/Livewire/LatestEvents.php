<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LatestEvents extends Component
{
    public $events;

    public function mount()
    {
        $this->events = DB::table('events')->orderBy('date', 'desc')->take(11)->get()->map(function ($event) {
            $event->date = Carbon::parse($event->date)->format('F j, Y');
            return $event;
        });
    }

    public function render()
    {
        return view('livewire.latest-events');
    }
}
