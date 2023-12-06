<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::latest()->paginate(4);
        return view('backend.bookings.index', ['bookings' => $bookings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //     $bookingsInstance = new Booking;
    //     $bookingsInstance->payment_status=$request->payment_status;
    //     $bookingsInstance->status=$request->status;
    //    return redirect()->route('bookings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
          $bookings = Booking::find($id);
         return view('backend.bookings.edit', compact('bookings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        $booking->payment_status=$request->payment_status;
        $booking->status=$request->status;
        $booking->save();
       return redirect()->route('bookings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
           $booking->delete();
        return redirect()->route('bookings.index')->with('message','Data deleted successfully');
    }
}
