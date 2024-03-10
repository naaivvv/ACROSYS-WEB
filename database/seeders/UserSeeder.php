<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@acrosys.com',
            'phone' => '1234567890',
            'birthday' => '1990-01-01',
            'role' => 1,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        // Client user
        User::create([
            'name' => 'Client',
            'email' => 'client@acrosys.com',
            'phone' => '0987654321',
            'birthday' => '1995-05-05',
            'role' => 0,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        // Organizer user
        User::create([
            'name' => 'Organizer',
            'email' => 'organizer@acrosys.com',
            'phone' => '9876543210',
            'birthday' => '1985-10-10',
            'role' => 2,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);
    }
}
