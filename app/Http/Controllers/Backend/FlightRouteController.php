<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use App\Models\flightRoute;
use App\Models\City;
use App\Models\Ariport;
use Illuminate\Http\Request;

class FlightRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flight_route = flightRoute::latest()->paginate(5);
        return view('backend.flight_route.index', compact('flight_route'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $city = City::get();
        $airport = Ariport::get();
        return view('backend.flight_route.create',compact('city','airport'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $data = new flightRoute;
            $data->name=$request->name;
            $data->departure_city=$request->departure_city;
            $data->arrival_city=$request->arrival_city;
            $data->departure_airport=$request->departure_airport;
            $data->arrival_airport=$request->arrival_airport;
            $data->save();
           return redirect('flight_route');
    }

    /**
     * Display the specified resource.
     */
    public function show(flightRoute $flightRoute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(flightRoute $flightRoute)
    {
        $city = City::get();
        $airport = Ariport::get();
        return view('backend.flight_route.edit', compact('flightRoute','city','airport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, flightRoute $flightRoute)
    {
        $flightRoute->name=$request->name;
        $flightRoute->departure_city=$request->departure_city;
        $flightRoute->arrival_city=$request->arrival_city;
        $flightRoute->departure_airport=$request->departure_airport;
        $flightRoute->arrival_airport=$request->arrival_airport;
        $flightRoute->save();
       return redirect('flight_route');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(flightRoute $flightRoute)
    {

        $flightRoute->delete();
        return redirect('flight_route')->with('message','Data deleted successfully');
    }
}

