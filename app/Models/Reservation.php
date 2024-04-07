<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'event_id', 'name', 'phone_number', 'email', 'national_id', 'province', 'district', 'sector', 'num_tickets', 'payment_option'
    ];
}

