<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;
use App\Models\Event;
use App\Models\Artist;
use Illuminate\Support\Facades\Auth;

class InvitationController extends Controller
{
    public function index()
    {
        $events = Event::with('artists')->get();
        $invitations = Invitation::where('artist_id', Auth::user()->id)->with('event')->get();

        return view('invitations.index', compact('invitations', 'events'));
    }

    public function update(Request $request, $id)
    {
        $invitation = Invitation::findOrFail($id);
        $invitation->status = $request->input('status');
        $invitation->save();

        return redirect()->route('invitations.index')->with('success', 'Invitation status updated.');
    }

    public function sendInvitations($eventId)
    {
        $event = Event::with('artists')->findOrFail($eventId);

        foreach ($event->artists as $artist) {
            Mail::to($artist->email)->send(new EventInvitation($event));
        }

        return redirect()->back()->with('success', 'Invitations sent successfully.');
    }

}


