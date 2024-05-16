<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',  // Include role in the fillable attributes
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'role' => 'integer',  // Ensure role is casted to integer
    ];

    /**
     * Check if the user has a specific role based on integer value.
     *
     * @param int $role
     * @return bool
     */
    public function hasRole($role)
    {
        return $this->role === $role;
    }

    /**
     * Role Constants for readability and to prevent hard-coding throughout the application.
     */
    const ROLE_USER = 0;
    const ROLE_ARTIST = 1;
    const ROLE_VENUE_OWNER = 2;
    const ROLE_EVENT_ORGANIZER = 3;

    /**
     * Check if the user is an event organizer.
     *
     * @return bool
     */
    public function isEventOrganizer()
    {
        return $this->role === self::ROLE_EVENT_ORGANIZER;
    }

    /**
     * Check if the user is an artist.
     *
     * @return bool
     */
    public function isArtist()
    {
        return $this->role === self::ROLE_ARTIST;
    }
}
