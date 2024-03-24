<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AddOrganizer extends Component
{
    public $name;
    public $email;
    public $password;
    public $phone;
    public $birthday;

    public function render()
    {
        return view('livewire.add-organizer');
    }

    public function index()
    {
        return view('admin.organizers');
    }

    public function addOrganizer()
    {
        try {
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'phone' => $this->phone,
                'birthday' => $this->birthday,
                'role' => 2, // Organizer role
            ]);
            session()->flash('success', 'Organizer created successfully.');
        } catch (\Illuminate\Database\QueryException $e) {
            session()->flash('error', 'Email already exists.');
        }

        return redirect()->route('organizers.add');
    }
}
