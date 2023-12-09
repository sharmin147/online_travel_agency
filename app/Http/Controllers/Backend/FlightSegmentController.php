<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\FlightSegment;
use App\Models\Airplane;
use App\Models\flightRoute;
use App\Models\Ariport;
use Illuminate\Http\Request;

class FlightSegmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flight_segment = FlightSegment::latest()->paginate(5);

         return view('backend.flight_segment.index', ['flight_segment' => $flight_segment]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $airplane = Airplane::get();
        $flightRoute = flightRoute::get();
        $airport = Ariport::get();
        return view('backend.flight_segment.create',compact('airplane','flightRoute','airport'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $flight_segmentInstance = new FlightSegment;
            $flight_segmentInstance->airplane_id=$request->airplane_id;
            $flight_segmentInstance->flight_route_id=$request->flight_route_id;
            $flight_segmentInstance->flight_number=$request->flight_number;
            $flight_segmentInstance->departure_date=$request->departure_date;
            $flight_segmentInstance->arrival_date=$request->arrival_date;
            $flight_segmentInstance->is_direct_flight=$request->is_direct_flight;
            $flight_segmentInstance->connection_airport=$request->connection_airport;
            $flight_segmentInstance->connection_duration=$request->connection_duration;
            $flight_segmentInstance->airline=$request->airline;
            $flight_segmentInstance->save();
           return redirect()->route('flight_segment.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(FlightSegment $flightSegment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $flight_segment = FlightSegment::find($id);
        $airplane = Airplane::get();
        $flightRoute = flightRoute::get();
        $airport = Ariport::get();
         return view('backend.flight_segment.edit', compact('flight_segment','airplane','flightRoute','airport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FlightSegment $flightSegment)
    {
        $flightSegment->airplane_id=$request->airplane_id;
        $flightSegment->flight_route_id=$request->flight_route_id;
        $flightSegment->flight_number=$request->flight_number;
        // $flightSegment->departure_city=$request->departure_city;
        // $flightSegment->arrival_city=$request->arrival_city;
        $flightSegment->departure_date=$request->departure_date;
        $flightSegment->arrival_date=$request->arrival_date;
        $flightSegment->is_direct_flight=$request->is_direct_flight;
        $flightSegment->connection_airport=$request->connection_airport;
        $flightSegment->connection_duration=$request->connection_duration;
        $flightSegment->airline=$request->airline;
        $flightSegment->save();
       return redirect()->route('flight_segment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FlightSegment $flightSegment)
    {

        $flightSegment->delete();
        return redirect()->route('flight_segment.index')->with('message','Data deleted successfully');
    }
}
