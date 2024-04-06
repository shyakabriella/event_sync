<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VenueRequest;

class VenueRequestController extends Controller
{
    public function store(Request $request)
    {
        $venueRequest = new VenueRequest();
        $venueRequest->venue_id = $request->venue_id;
        $venueRequest->status = 'pending'; 
        $venueRequest->save();

        return back()->with('success', 'Venue request submitted successfully!');
    }

    public function updateStatus(Request $request, $id)
    {
        $venueRequest = VenueRequest::findOrFail($id);
        $venueRequest->status = $request->status; // 'approved' or 'rejected'
        $venueRequest->save();

        return back()->with('success', 'Status updated successfully!');
    }

}

