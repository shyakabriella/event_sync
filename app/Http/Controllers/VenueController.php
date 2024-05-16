<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;


class VenueController extends Controller
{
    public function index(): View
    {
        $venues = Venue::latest()->paginate(10);
        return view('venues.index', compact('venues'));
    }

    public function getVenueDetails($venueId)
    {
        return Venue::find($venueId);
    }

    public function create(): View
    {
        return view('venues.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string',
            'capacity' => 'nullable|integer',
            'contact_info' => 'nullable|string',
            'email' => 'required|email|unique:users,email|unique:venues,email',
            'type' => 'nullable|string',
            'amenities' => 'nullable|string',
            'images' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('images')) {
            $validated['images'] = $request->file('images')->store('venues/images', 'public');
        }

        // Create the venue
        $venue = Venue::create($validated);

        // Generate a random password
        $password = \Str::random(10);
        $hashedPassword = Hash::make($password);

        // Create a user account for the venue
        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = $hashedPassword;
        $user->role = 2;  // Assuming 2 is the code for 'Venue Owner'
        $user->save();

        // Send email with credentials
        Mail::send('emails.credentials', [
            'name' => $user->name,
            'email' => $user->email,
            'password' => $password
        ], function ($message) use ($user) {
            $message->to($user->email, $user->name)
                    ->subject('Your New Venue Account Credentials');
        });

        return redirect()->route('venues.index')->with('success', 'Venue created successfully and user account generated.');
    }


    public function show(Venue $venue): View
    {
        return view('venues.show', compact('venue'));
    }

    public function edit(Venue $venue): View
    {
        return view('venues.edit', compact('venue'));
    }

    public function update(Request $request, Venue $venue): RedirectResponse
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'location' => 'required|string',
        'capacity' => 'nullable|integer',
        'contact_info' => 'nullable|string',
        'description' => 'nullable|string',
        'type' => 'nullable|string',
        'amenities' => 'nullable|string',
        'images' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'booking_policy' => 'nullable|string',
        'availability_start' => 'nullable|date',
        'availability_end' => 'nullable|date|after_or_equal:availability_start',
    ]);

    if ($request->hasFile('images')) {
       
        if ($venue->images && Storage::exists('public/' . $venue->images)) {
            Storage::delete('public/' . $venue->images);
        }
        $validated['images'] = $request->file('images')->store('venues/images', 'public');
    } else {
       
        unset($validated['images']);
    }

    $venue->update($validated);

    return redirect()->route('venues.index')->with('success', 'Venue updated successfully.');
}


    public function destroy(Venue $venue): RedirectResponse
    {
        $venue->delete();

        return redirect()->route('venues.index')->with('success', 'Venue deleted successfully.');
    }

    public function storeRequest(Request $request)
{
    $venueRequest = new VenueRequest();
    $venueRequest->venue_id = $request->venue_id;
    $venueRequest->user_id = auth()->id(); // Assuming the user is authenticated
    $venueRequest->status = 'pending'; // Set the initial status
    $venueRequest->save();

    return back()->with('success', 'Venue request submitted successfully.');
}

}
