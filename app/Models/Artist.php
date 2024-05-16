<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    // If you want to explicitly define which fields can be mass-assigned
    protected $fillable = [
        'name', 'email', 'genre', 'contact_info', 'image', 
        'performance_requirements', 'availability', 'past_performances', 'password'
    ];

    // Remove the guarded property since $fillable is being used
    // protected $guarded = [];

    public function events()
    {
        return $this->belongsToMany(Event::class, 'artist_event', 'artist_id', 'event_id');
    }
}

