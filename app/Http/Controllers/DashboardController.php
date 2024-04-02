<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class DashboardController extends Controller
{
    public function eventOrganizer()
    {
        $events = Event::orderBy('date', 'ASC')->paginate(3); 
        return view('dashboards.event_organizer', compact('events'));
    }
    
    public function artist()
    {
        return view('dashboards.artist');
    }

    public function venueOwner()
    {
        return view('dashboards.venue_owner');
    }
}
