<?php

namespace App\Livewire;

use Livewire\Component;

class DeleteOrganizer extends Component
{
    public function confirmDelete()
    {
        $this->emit('deleteRow', ['rowId' => $this->rowId]);
    }
    public function render()
    {
        return view('livewire.delete-organizer');
    }
}
