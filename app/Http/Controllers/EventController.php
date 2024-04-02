<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Artist; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::with('tickets')->get();
        $events = Event::orderBy('date', 'ASC')->paginate(3);
        $artists = Artist::all(); 

        $events = Event::with(['tickets' => function ($query) {
            $query->selectRaw(
                'event_id, seat_type, price, SUM(quantity) as quantity_available'
            )->groupBy('event_id', 'seat_type', 'price');
        }])->get();
        return view('events.index', compact('events', 'artists'));
    }

    public function create(): View
    {
        
        return view('events.create');
    }

    public function assignArtist(Request $request, Event $event)
{
    $validated = $request->validate([
        'artist_id.*' => 'required|exists:artists,id',
    ]);

    // Sync the selected artists with the event
    $event->artists()->sync($validated['artist_id']);

    return back()->with('success', 'Artists assigned successfully to the event.');
}


public function store(Request $request): RedirectResponse
{
    $request->validate([
        'name' => 'required|string|max:255',
        'date' => 'required|date',
        'location' => 'required|string',
        'description' => 'nullable|string',
        'capacity' => 'nullable|integer',
        'event_type' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $data = $request->except('image');

    
    $event = $request->has('id') ? Event::findOrFail($request->id) : new Event;

    if ($request->hasFile('image')) {
        
        if ($event->image && File::exists(public_path('images/homepage/' . $event->image))) {
            File::delete(public_path('images/homepage/' . $event->image));
        }

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('images/homepage'); 
        $image->move($destinationPath, $filename);

      
        $event->image = $filename;
    }

  
    $event->name = $data['name'];
    $event->date = $data['date'];
    $event->location = $data['location'];
    $event->description = $data['description'];
    $event->capacity = $data['capacity'];
    $event->event_type = $data['event_type'];


    $event->save();

    return redirect()->route('dashboard.event-organizer')->with('success', 'Event saved successfully.');
      }


    public function edit($id): View
        {
        
            $event = Event::findOrFail($id);
            return view('events.edit', compact('event'));
        }

    public function update(Request $request, $id): RedirectResponse
    {
     
        $request->validate ([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'location' => 'required|string',
            'description' => 'nullable|string',
            'capacity' => 'nullable|integer',
            'event_type' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $event = Event::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($event->image) {
                Storage::delete('public/' . $event->image);
            }
            $data['image'] = $request->file('image')->store('events', 'public');
        }

        $event->update($data);

        return redirect()->route('dashboard.event-organizer')->with('success', 'Event created successfully.');
    }
    

    public function destroy($id): RedirectResponse
    {
        $event = Event::findOrFail($id);

        if ($event->image) {
            Storage::delete('public/' . $event->image);
        }

        $event->delete();

        return redirect()->route('dashboard.event-organizer')->with('success', 'Event created successfully.');
    }
}