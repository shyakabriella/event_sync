<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $fillable = [
        'name', 'location', 'capacity', 'contact_info', 'description',
        'type', 'amenities', 'images', 'website', 'booking_policy',
        'availability_start', 'availability_end', 
    ];

    protected $casts = [
        'amenities' => 'array',
        'images' => 'array',
        'availability' => 'array',
    ];
}
