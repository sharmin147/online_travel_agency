<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\FlightSegment;
use App\Models\Airplane;
use App\Models\City;
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
        $city = City::get();
        $airport = Ariport::get();
        return view('backend.flight_segment.create',compact('airplane','city','airport'));
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
            // $flight_segmentInstance->departure_city=$request->departure_city;
            // $flight_segmentInstance->arrival_city=$request->arrival_city;
            $flight_segmentInstance->departure_date=$request->departure_date;
            $flight_segmentInstance->arrival_date=$request->arrival_date;
            $flight_segmentInstance->is_direct_flight=$request->is_direct_flight;
            $flight_segmentInstance->connection_airport=$request->connection_airport;
            $flight_segmentInstance->connection_duration=$request->connection_duration;
            $flight_segmentInstance->price=$request->price;
            $flight_segmentInstance->save();
           return redirect('flight_segment');
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
         return view('backend.flight_segment.edit', compact('flight_segment'));
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
        $flightSegment->price=$request->price;
        $flightSegment->save();
       return redirect('flight_segment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FlightSegment $flightSegment)
    {

        $flightSegment->delete();
        return redirect('flight_segment')->with('message','Data deleted successfully');
    }
}
