<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_code',
        'name',
        'date',
        'description',
        'location',
        'created_at',
        'updated_at',
    ];

    public function organizers()
    {
        return $this->belongsToMany(User::class, 'event_organizer', 'event_id', 'user_id');
    }
}
