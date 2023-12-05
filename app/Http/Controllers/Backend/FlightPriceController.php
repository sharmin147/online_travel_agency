<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\FlightPrice;
use Illuminate\Http\Request;

class FlightPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flight_prices = FlightPrice::latest()->paginate(4);
    return view('backend.flight_prices.index', ['flight_prices' => $flight_prices]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.flight_prices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $flight_prices = new FlightPrice;
        $flight_prices->flight_category_id=$request->flight_category_id;
        $flight_prices->flight_class_id=$request->flight_class_id;
        $flight_prices->flight_route_id=$request->flight_route_id;
        $flight_prices->price=$request->price;
        $flight_prices->status=$request->status;
        $flight_prices->save();
       return redirect('flight_prices');
    }

    /**
     * Display the specified resource.
     */
    public function show(FlightPrice $flightPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FlightPrice $flightPrice)
    {
        return view('backend.flight_prices.edit', compact('flightPrices'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FlightPrice $flightPrice)
    {
        $flightPrice->flight_category_id=$request->flight_category_id;
        $flightPrice->flight_class_id=$request->flight_class_id;
        $flightPrice->flight_route_id=$request->flight_route_id;
        $flightPrice->price=$request->price;
        $flightPrice->status=$request->status;
        $flightPrice->save();
       return redirect('flight_prices');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FlightPrice $flightPrice)
    {
        $flightPrice->delete();
        return redirect('flight_prices')->with('message','Data deleted successfully');
    }
}
