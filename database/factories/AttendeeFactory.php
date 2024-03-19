<?php

namespace Database\Factories;

use App\Models\Attendee;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendeeFactory extends Factory
{
    protected $model = Attendee::class;

    public function definition()
    {
        return [
            'fname' => $this->faker->firstName,
            'lname' => $this->faker->lastName,
            'ref_id' => $this->faker->unique()->randomNumber(),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }

}
