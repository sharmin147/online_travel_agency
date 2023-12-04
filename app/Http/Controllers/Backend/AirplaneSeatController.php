<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\AirplaneSeat;
use Illuminate\Http\Request;

class AirplaneSeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $airplane_seats = AirplaneSeat::latest()->paginate(5);

        return view('backend.airplane_seats.index', ['airplane_seats' => $airplane_seats]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.airplane_seats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AirplaneSeat $airplaneSeat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AirplaneSeat $airplaneSeat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AirplaneSeat $airplaneSeat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AirplaneSeat $airplaneSeat)
    {
        //
    }
}
