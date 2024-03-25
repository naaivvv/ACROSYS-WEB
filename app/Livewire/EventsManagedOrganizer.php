<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class EventsManagedOrganizer extends Component
{
    public $events;
    public $id;
    public function mount()
    {
        $user = Auth::user(); // Get the currently logged-in user
        $this->id = $user->id;
        $this->events = DB::table('events')
        ->join('event_organizer', 'events.id', '=', 'event_organizer.event_id')
        ->where('event_organizer.user_id', $this->id)
        ->orderBy('date', 'desc')
        ->take(11)
        ->get()
        ->map(function ($event) {
            $event->date = Carbon::parse($event->date)->format('F j, Y');
            return $event;
        });
    }

    public function render()
    {
        return view('livewire.events-managed-organizer');
    }
}
