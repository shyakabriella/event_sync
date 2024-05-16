<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Event;
use App\Models\Venue;
use App\Models\Ticket;
use App\Models\Reservation;

use App\Models\VenueRequest; // Import the VenueRequest model

class BookingController extends Controller
{
    public function index()
    {   
        $venues = Venue::latest()->paginate(10);
        $bookings = Booking::latest()->paginate(10);
        $events = Event::latest()->paginate(10);
        $venueRequests = VenueRequest::latest()->paginate(10); 

        return view('bookings.index', compact('venues', 'bookings', 'events', 'venueRequests'));
    }

    public function showBookingForm($eventId)
    {
        $event = Event::findOrFail($eventId);
        $ticket = Ticket::where('event_id', $eventId)->first(); // Ensure there is a ticket
    
        // Handle the case where there might not be a ticket available
        if (!$ticket) {
            return redirect()->back()->withErrors('No tickets available for this event.');
        }
    
        return view('bookings.booking-form', compact('event', 'ticket'));
    }
    
    public function submitBooking(Request $request)
{
    $request->validate([
        'event_id' => 'required|exists:events,id',
        'name' => 'required|string',
        'phone_number' => 'required|string',
        'email' => 'required|email',
        'national_id' => 'required|string',
        'province' => 'required|string',
        'district' => 'required|string',
        'sector' => 'required|string',
        'num_tickets' => 'required|integer|min:1',
        'payment_option' => 'required|string',
    ]);

    $reservation = Reservation::create($request->all());
    
    return redirect()->route('bookings.payment', ['eventId' => $request->event_id])->with('reservation', $reservation);
}



        
        

        

}
