<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Artist;
use App\Models\Booking;
use App\Models\VenueRequest; 




class DashboardController extends Controller
{
    public function eventOrganizer()
    {
        $venueRequests = VenueRequest::all();
        $events = Event::orderBy('date', 'ASC')->paginate(3); 
        return view('dashboards.event_organizer', compact('events','venueRequests'));
    }
    
    public function artist()
    {
        $events = Event::with('artists')->get();
        return view('dashboards.artist', compact('events'));
    }

    public function venueOwner()
    {
        $events = Event::with('artists')->get();
        $newBookingsCount = Booking::where('status', 'new')->count();
        $venueRequests = VenueRequest::all(); 
        return view('dashboards.venue_owner', compact('events', 'newBookingsCount', 'venueRequests'));
    }

   


}
