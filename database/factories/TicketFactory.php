<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\Event;
use App\Models\Attendee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TicketFactory extends Factory
{
    protected $model = Ticket::class;

    public function definition()
    {
        // Get random existing event and attendee IDs
        $event = Event::inRandomOrder()->first();
        $attendee = Attendee::inRandomOrder()->first();

        return [
            'event_id' => $event->id,
            'attendee_id' => $attendee->id,
            'ref_num' => Str::random(10),
            'status' => $this->faker->randomElement(['Pending', 'Reserved', 'Terminated']),
            'checked_in' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'checked_out' => $this->faker->optional()->dateTimeBetween('-6 months', 'now'),
            'created_at' => $this->faker->dateTimeBetween('-6 months', 'now'),
        ];
    }
}
