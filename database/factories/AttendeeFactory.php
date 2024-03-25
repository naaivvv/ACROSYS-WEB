<?php

namespace Database\Factories;

use App\Models\Attendee;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendeeFactory extends Factory
{
    protected $model = Attendee::class;

    public function definition()
    {
        $user = User::inRandomOrder()->first();

        return [
            'fname' => $this->faker->firstName,
            'lname' => $this->faker->lastName,
            'ref_id' => $user->id,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
