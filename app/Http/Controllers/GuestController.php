<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuestRequest;
use App\Http\Requests\UpdateGuestRequest;
use App\Models\Guest;
use Inertia\Inertia;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('ParticipationConfirmation', [

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuestRequest $request)
    {
        collect($request->guests)
            ->each(fn($guest) => Guest::create($guest));
    }

    /**
     * Display the specified resource.
     */
    public function show(Guest $guest)
    {
        $allGuests = Guest::all();

        return Inertia::render('Admin/Dashboard', [
            'guestsCount' => $allGuests->where('is_participated', true)->count(),
            'lactoseFreeCount' => $allGuests->where('is_lactose_free', true)->count(),
            'glutenFreeCount' => $allGuests->where('is_gluten_free', true)->count(),
            'vegetarianCount' => $allGuests->where('is_vegetarian', true)->count(),
            'veganCount' => $allGuests->where('is_vegan', true)->count(),
            'childCount' => $allGuests->where('is_child', true)->count(),
            'guests' => $allGuests
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuestRequest $request, Guest $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guest $guest)
    {
        //
    }
}
