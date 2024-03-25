<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'ref_id',
        'email',
    ];

    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_attendee', 'attendee_id', 'event_id');
    }
}
