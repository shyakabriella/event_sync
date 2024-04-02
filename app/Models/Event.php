<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'date', 'location', 'description', 'capacity', 'event_type', 'image',
    ];

    public function tickets()
{
    return $this->hasMany(Ticket::class);
}

    
}
