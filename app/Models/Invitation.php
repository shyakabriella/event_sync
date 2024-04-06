<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
