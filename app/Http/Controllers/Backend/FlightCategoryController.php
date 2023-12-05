<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\FlightCategory;
use Illuminate\Http\Request;

class FlightCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flight_category = FlightCategory::latest()->paginate(4);

         return view('backend.flight_category.index', ['flight_category' => $flight_category]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.flight_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $flight_categoryInstance = new FlightCategory;
            $flight_categoryInstance->name=$request->name;
            $flight_categoryInstance->description=$request->description;
            $flight_categoryInstance->baggage_allowance=$request->baggage_allowance;
            $flight_categoryInstance->refundable=$request->refundable;
            $flight_categoryInstance->save();
           return redirect()->route('flight_category.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(FlightCategory $flightCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
             $flight_category = FlightCategory::find($id);
         return view('backend.flight_category.edit', compact('flight_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FlightCategory $flightCategory)
    {
            $flightCategory->name=$request->name;
            $flightCategory->description=$request->description;
            $flightCategory->baggage_allowance=$request->baggage_allowance;
            $flightCategory->refundable=$request->refundable;
            $flightCategory->save();
           return redirect()->route('flight_category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FlightCategory $flightCategory)
    {
       $flightCategory->delete();
        return redirect()->route('flight_category.index')->with('message','Data deleted successfully');
    }

}
