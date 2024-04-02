<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
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
            'email' => 'required|email|max:255|unique:artists,email',
            'genre' => 'nullable|string',
            'contact_info' => 'nullable|string',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'performance_requirements' => 'nullable|string',
            // Assuming 'availability' and 'past_performances' are dates or comma-separated dates
            'availability' => 'nullable|string',
            'past_performances' => 'nullable|string',
        ]);

        // Handle the image upload if the image is present
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('artists', 'public');
        }

        // Convert dates to JSON or another preferred format if necessary
        // Example for converting a comma-separated list of dates to an array
        // $validatedData['availability'] = explode(',', $validatedData['availability']);
        // $validatedData['past_performances'] = explode(',', $validatedData['past_performances']);

        Artist::create($validatedData);

        return redirect()->route('artists.index')->with('success', 'Artist created successfully.');
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

        // Image update logic
        if ($request->hasFile('image')) {
            if ($artist->image) {
                Storage::delete('public/' . $artist->image);
            }
            $validatedData['image'] = $request->file('image')->store('artists', 'public');
        } else {
            unset($validatedData['image']); // Exclude image from update if not present
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
