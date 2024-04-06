<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Event;
use App\Models\Venue;

class BookingController extends Controller
{
    public function index()
    {
        // Fetch bookings with event and venue details
        $bookings = Booking::with('event', 'venue')->get();
        $events = Event::with('artists')->get();
        // Return the view with the bookings data
        return view('bookings.index', compact('bookings','events'));
    }

    public function countNewBookings()
    {
        // Assuming you have a 'status' column in your bookings table to indicate new bookings
        $newBookingsCount = Booking::where('status', 'new')->count();
        return $newBookingsCount;
    }


}
