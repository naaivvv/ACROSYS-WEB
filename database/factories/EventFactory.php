<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        $prefix = $this->faker->unique()->regexify('[A-Z]{3}');
        $suffix = $this->faker->bothify('##??');
        $event_code = $prefix . $suffix;

        return [
            'event_code' => $event_code,
            'name' => $this->faker->sentence(3),
            'date' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'description' => $this->faker->text(200),
            'location' => $this->faker->address,
        ];
    }
}
