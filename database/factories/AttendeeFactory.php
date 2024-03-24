<?php

namespace Database\Factories;

use App\Models\Attendee;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendeeFactory extends Factory
{
    protected $model = Attendee::class;

    public function definition()
    {
        $ref_id = null;
        do {
            $ref_id = '0000' . $this->faker->randomNumber(7, true);
        } while (Attendee::where('ref_id', $ref_id)->exists());

        return [
            'fname' => $this->faker->firstName,
            'lname' => $this->faker->lastName,
            'ref_id' => $ref_id,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
