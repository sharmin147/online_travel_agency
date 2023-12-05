<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\AirplaneSeat;
use App\Models\FlightClass;
use App\Models\Airplane;
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
        $class=FlightClass::get();
        $airplane=Airplane::get();
        return view('backend.airplane_seats.create',compact('airplane','class'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $airplaneSeat = new AirplaneSeat;
        $airplaneSeat->airplane_id=$request->airplane_id;
        $airplaneSeat->flight_class_id=$request->flight_class_id;
        $airplaneSeat->quantity=$request->quantity;
        $airplaneSeat->save();
       return redirect()->route('airplane_seats.index');
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
        $class=FlightClass::get();
        $airplane=Airplane::get();
        return view('backend.airplane_seats.edit', compact('airplane','class','airplaneSeat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AirplaneSeat $airplaneSeat)
    {
        $airplaneSeat->airplane_id=$request->airplane_id;
        $airplaneSeat->flight_class_id=$request->flight_class_id;
        $airplaneSeat->quantity=$request->quantity;
        $airplaneSeat->save();
       return redirect()->route('airplane_seats.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AirplaneSeat $airplaneSeat)
    {
        $airplaneSeat->delete();
        return redirect()->route('airplane_seats.index')->with('message','Data deleted successfully');
    }
}
