<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    // If your table name matches the model name in plural form ('reports'), this isn't needed.
    // protected $table = 'reports';

    protected $fillable = ['name', 'description'];
}
