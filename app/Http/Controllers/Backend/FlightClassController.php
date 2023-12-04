<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\FlightClass;
use Illuminate\Http\Request;

class FlightClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flight_class = FlightClass::latest()->paginate(5);

        return view('backend.flight_class.index', ['flight_class' => $flight_class]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('backend.flight_class.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $flight_classInstance = new FlightClass;
            $flight_classInstance->class_name=$request->class_name;
            $flight_classInstance->price=$request->price;
            $flight_classInstance->status=$request->status;
            $flight_classInstance->save();
           return redirect('flight_class');
    }

    /**
     * Display the specified resource.
     */
    public function show(FlightClass $flightClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(string $id)
    {
             $flight_class = FlightClass::find($id);
         return view('backend.flight_class.edit', compact('flight_class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FlightClass $flightClass)
    {
            $flightClass->flight_id=$request->flight_id;
            $flightClass->seat_id=$request->seat_id;
            $flightClass->class_name=$request->class_name;
            $flightClass->price=$request->price;
            $flightClass->status=$request->status;
            $flightClass->save();
           return redirect('flight_class');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FlightClass $flightClass)
    {

       $flightClass->delete();
        return redirect('flight_class')->with('message','Data deleted successfully');
    }
}
