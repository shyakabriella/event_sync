<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['event_id', 'name', 'seat_type', 'price', 'quantity'];


    // Define the relationship to the Event model
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}

