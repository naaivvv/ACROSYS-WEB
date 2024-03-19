<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        return [
            'event_code' => $this->faker->unique()->bothify('EVENT##??'),
            'name' => $this->faker->sentence(3),
            'date' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'description' => $this->faker->text(200),
            'location' => $this->faker->address,
        ];
    }
}
