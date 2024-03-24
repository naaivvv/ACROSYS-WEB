<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AddClient extends Component
{
    public $name;
    public $email;
    public $password;
    public $phone;
    public $birthday;

    public function render()
    {
        return view('livewire.add-client');
    }
    public function index()
    {
        return view('admin.clients');
    }

    public function addClient()
    {
        try {
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'phone' => $this->phone,
                'birthday' => $this->birthday,
                'role' => 0, // Client role
            ]);
            session()->flash('success', 'Client created successfully.');
        } catch (\Illuminate\Database\QueryException $e) {
            session()->flash('error', 'Email already exists.');
        }

        return redirect()->route('clients.add');
    }
}
