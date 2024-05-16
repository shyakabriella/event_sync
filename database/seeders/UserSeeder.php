<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Event Organizer',
            'email' => 'eventorganizer@example.com',
            'password' => Hash::make('password'),
            'role' => User::ROLE_EVENT_ORGANIZER, 
        ]);

        User::create([
            'name' => 'Artist and Performer',
            'email' => 'artistperformer@example.com',
            'password' => Hash::make('password'),
            'role' => User::ROLE_ARTIST, 
        ]);

        User::create([
            'name' => 'Venue Owner/Manager',
            'email' => 'venueowner@example.com',
            'password' => Hash::make('password'),
            'role' => User::ROLE_VENUE_OWNER, 
        ]);
    }
}
