<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name', 'genre', 'bio', 'contact_info', 'social_media', 'image', 'website', 'performance_requirements', 'availability', 'past_performances', 'email',
    ];

    public function events()
{
    return $this->belongsToMany(Event::class, 'artist_event', 'artist_id', 'event_id');
}
 
}

