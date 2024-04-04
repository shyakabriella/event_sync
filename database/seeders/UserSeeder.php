<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->call(RoleSeeder::class);
        $eventOrganizer = User::create([
            'name' => 'Event Organizer',
            'email' => 'eventorganizer@example.com',
            'password' => Hash::make('password'), 
        ]);
        $eventOrganizer->assignRole('Event Organizer');

        $artistPerformer = User::create([
            'name' => 'Artist and Performer',
            'email' => 'artistperformer@example.com',
            'password' => Hash::make('password'), 
        ]);
        
        $artistPerformer->assignRole('Artist and Performer');

        $venueOwner = User::create([
            'name' => 'Venue Owner/Manager',
            'email' => 'venueowner@example.com',
            'password' => Hash::make('password'), 
        ]);
        $venueOwner->assignRole('Venue Owner/Manager');
    }
}

