<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attendee;

class AttendeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attendee::factory()->count(300)->create();
    }
}
