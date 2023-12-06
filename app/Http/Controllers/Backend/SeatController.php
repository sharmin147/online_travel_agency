<?php

namespace App\Http\Controllers\Backend;

use App\Models\Seat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $seats = Seat::latest()->paginate(5);
     return view('backend.seats.index', ['seats' => $seats]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.seats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $seatsInstance = new Seat;
         $seatsInstance->flight_id=$request->flight_id;
         $seatsInstance->category_id=$request->category_id;
         $seatsInstance->class_id=$request->class_id;
         $seatsInstance->status=$request->status;
         $seatsInstance->save();
       return redirect()->route('seats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Seat $seat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
 {
     $seats = Seat::find($id);
     return view('backend.seats.edit', compact('seats'));
 }


    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Seat $seats)
 {
     $seats->flight_id = $request->flight_id;
     $seats->category_id = $request->category_id;
     $seats->class_id = $request->class_id;
     $seats->status = $request->status;
     $seats->save();

     return redirect()->route('seats.index');
 }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seat $seats)
    {
       $seats->delete();
        return redirect()->route('seats.index')->with('message','Data deleted successfully');
    }
}
