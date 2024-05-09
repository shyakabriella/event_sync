<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request; 

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
    // Convert roles collection to array
    \Log::info('Roles: ', ['roles' => $user->roles->pluck('name')->toArray()]);

    if ($user->hasRole('Event Organizer')) {
        return redirect('/dashboard/event-organizer');
    } elseif ($user->hasRole('Artist and Performer')) {
        return redirect('/dashboard/artist');
    } elseif ($user->hasRole('Venue Owner/Manager')) {
        return redirect('/dashboard/venue-owner');
    }

    // Default redirect if no roles matched
    return redirect('/home');
}

    
}
