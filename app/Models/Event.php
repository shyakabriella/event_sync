<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $dates = ['date'];
    protected $fillable = [
        'name', 'date', 'location', 'description', 'capacity', 'event_type', 'image',
    ];

    public function artists()
    {
        return $this->belongsToMany(Artist::class, 'artist_event', 'event_id', 'artist_id');
    }
    

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
    
}
