<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request; // Make sure to include this

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * The authenticated method is called immediately
     * after the user is authenticated and before redirecting.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function authenticated(Request $request, $user)
    {
        if ($user->hasRole('Event Organizer')) {
            // Ensure this path matches exactly what's defined in your routes.
            return redirect('/dashboard/event-organizer');
        } elseif ($user->hasRole('Artist and Performer')) {
            // Adjusted the path to match the route definition
            return redirect('/dashboard/artist');
        } elseif ($user->hasRole('Venue Owner/Manager')) {
            // Ensure this path matches exactly what's defined in your routes.
            return redirect('/dashboard/venue-owner');
        }

        return redirect('/home');
    }
}
