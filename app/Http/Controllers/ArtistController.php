<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\Artist;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\View\View;

class ArtistController extends Controller
{
    public function index()
{
    $artists = Artist::all(); 
    return view('artists.index', compact('artists'));
}

    public function create(): View
    {
      
        return view('artists.create');
    }

    public function store(Request $request): RedirectResponse
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:artists,email|unique:users,email',
        'genre' => 'nullable|string',
        'contact_info' => 'nullable|string',
        'image' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'performance_requirements' => 'nullable|string',
        'availability' => 'nullable|string',
        'past_performances' => 'nullable|string',
    ]);

    if ($request->hasFile('image')) {
        $validatedData['image'] = $request->file('image')->store('artists', 'public');
    }

    $password = \Str::random(10); 
    $hashedPassword = Hash::make($password); 

    $validatedData['password'] = $hashedPassword;
    $artist = Artist::create($validatedData);
    
    $user = new \App\Models\User();
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    $user->password = $hashedPassword;
    $user->role = 1; 
    $user->save();

    Mail::send('emails.credentials', [
        'name' => $user->name, 
        'email' => $user->email, 
        'password' => $password  
    ], function ($message) use ($user) {
        $message->to($user->email, $user->name)
                ->subject('Your New Artist Account Credentials');
    });

    Auth::login($user); 
    return redirect()->back()->with('success', 'Artist added successfully!');
}


    public function show(Artist $artist): View
    {
        return view('artists.show', compact('artist'));
    }

    public function edit(Artist $artist): View
    {
        return view('artists.edit', compact('artist'));
    }

    public function update(Request $request, Artist $artist): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:artists,email',
            'genre' => 'nullable|string',
            'contact_info' => 'nullable|string',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'performance_requirements' => 'nullable|string',
            'availability' => 'nullable|string',
            'past_performances' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            if ($artist->image) {
                Storage::delete('public/' . $artist->image);
            }
            $validatedData['image'] = $request->file('image')->store('artists', 'public');
        } else {
            unset($validatedData['image']); 
        }

        $artist->update($validatedData);

        return redirect()->route('artists.index')->with('success', 'Artist updated successfully.');
    }

    public function destroy(Artist $artist): RedirectResponse
    {
        if ($artist->image) {
            Storage::delete('public/' . $artist->image);
        }
        $artist->delete();

        return redirect()->route('artists.index')->with('success', 'Artist deleted successfully.');
    }
}
