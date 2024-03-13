<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attendee;
use Illuminate\Support\Facades\Hash;

class AttendeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attendee::create([
            'fname' => 'John',
            'lname' => 'Doe',
            'ref_id' => '1',
            'email' => 'admin@acrosys.com',
        ]);
    }
}
