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

    protected function authenticated(Request $request, $user)
    {
        switch ($user->role) {
            case 1: // Artist
                \Log::info('Redirecting to artist dashboard');
                return redirect('/dashboard/artist');
            case 2: // Venue Owner/Manager
                return redirect('/dashboard/venue-owner');
            case 3: // Event Organizer
                return redirect('/dashboard/event-organizer');
            default: // Normal user
                \Log::info('Redirecting to home');
                return redirect('/home');
        }
    }
}
