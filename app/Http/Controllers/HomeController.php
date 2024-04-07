<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Event; // Import the Event model
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $roles = Role::orderBy('id', 'DESC')->get();
        $events = Event::all(); // Fetch all events

        return view('home', compact('roles', 'events')); // Pass events to the view
    }
}
