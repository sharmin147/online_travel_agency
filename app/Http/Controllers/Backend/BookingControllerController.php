<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingControllerController extends Controller
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
        $bookingsInstance = new Booking;
        $bookingsInstance->customer_id=$request->customer_id;
        $bookingsInstance->flight_id=$request->flight_id;
        $bookingsInstance->seat_id=$request->seat_id;
        $bookingsInstance->payment_status=$request->payment_status;
        $bookingsInstance->status=$request->status;
        $bookingsInstance->save();
       return redirect('bookings');
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
        $booking->customer_id=$request->customer_id;
        $booking->flight_id=$request->flight_id;
        $booking->seat_id=$request->seat_id;
        $booking->payment_status=$request->payment_status;
        $booking->status=$request->status;
        $booking->save();
       return redirect('bookings');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
           $booking->delete();
        return redirect('bookings')->with('message','Data deleted successfully');
    }
}
