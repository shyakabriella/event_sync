<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Event;
use App\Models\Venue;
use App\Models\VenueRequest; // Import the VenueRequest model

class BookingController extends Controller
{
    public function index()
    {   
        $venues = Venue::latest()->paginate(10);
        $bookings = Booking::latest()->paginate(10);
        $events = Event::latest()->paginate(10);
        $venueRequests = VenueRequest::latest()->paginate(10); // Fetch venue requests

        return view('bookings.index', compact('venues', 'bookings', 'events', 'venueRequests'));
    }
}
