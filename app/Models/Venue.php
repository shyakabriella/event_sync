<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $fillable = [
        'name', 'location', 'capacity', 'contact_info', 'email',
        'type', 'amenities', 'images', 'website', 
        'availability_start', 'availability_end',
    ];

    protected $casts = [
        'amenities' => 'array', // assuming amenities are stored as JSON in the database
        'images' => 'array',    // assuming images are stored as JSON
    ];

    // Assuming availability_start and availability_end are date fields, not array
    // If you need to handle them as a single range or array, additional casting or accessor might be needed
}
