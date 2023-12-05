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
            $flight_classInstance->name=$request->name;
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
            $flightClass->name=$request->name;
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
