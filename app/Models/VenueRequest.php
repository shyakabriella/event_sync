<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VenueRequest extends Model
{
    protected $fillable = ['venue_id', 'status'];

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }
}
