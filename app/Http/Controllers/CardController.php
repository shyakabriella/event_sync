<?php

namespace App\Http\Controllers;

use App\Models\Card; // Use Card model instead of Product
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CardController extends Controller
{
    /**
     * Constructor with middleware settings adjusted for cards.
     */
    function __construct()
    {
        $this->middleware('permission:card-list|card-create|card-edit|card-delete', ['only' => ['index','show']]);
        $this->middleware('permission:card-create', ['only' => ['create','store']]);
        $this->middleware('permission:card-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:card-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of cards.
     */
    public function index(): View
    {
        $cards = Card::latest()->paginate(5);
        return view('cards.index', compact('cards'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new card.
     */
    public function create(): View
    {
        return view('cards.create');
    }

    /**
     * Store a newly created card in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        request()->validate([
            'serialnumber' => 'required', // Adjust validation rules for card
        ]);

        Card::create($request->all());

        return redirect()->route('cards.index')
                        ->with('success', 'Card created successfully.');
    }

    /**
     * Display the specified card.
     */
    public function show(Card $card): View
    {
        return view('cards.show', compact('card'));
    }

    /**
     * Show the form for editing the specified card.
     */
    public function edit(Card $card): View
    {
        return view('cards.edit', compact('card'));
    }

    /**
     * Update the specified card in storage.
     */
    public function update(Request $request, Card $card): RedirectResponse
    {
        request()->validate([
            'serialnumber' => 'required', // Adjust validation rules for card
        ]);

        $card->update($request->all());

        return redirect()->route('cards.index')
                        ->with('success', 'Card updated successfully');
    }

    /**
     * Remove the specified card from storage.
     */
    public function destroy(Card $card): RedirectResponse
    {
        $card->delete();

        return redirect()->route('cards.index')
                        ->with('success', 'Card deleted successfully');
    }
}
