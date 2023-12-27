<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\City;
use App\Models\FlightClass;
use App\Models\FlightCategory;
use App\Models\flightRoute;
use App\Models\FlightSegment;
use App\Models\AirplaneSeat;
use App\Models\FlightPrice;
use App\Models\Payment;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $r)
    {
        $bookings = Booking::latest()->get();
        $data=array();
        if($bookings){
            foreach($bookings as $b){
                $data[]=array(
                    'id'=>$b->id,
                    'flight'=>$b->flight?->flight_number,
                    'sclass'=>$b->sclass?->name,
                    'booking_date'=>$b->booking_date,
                    'departure_date'=>$b->flight?->departure_date,
                    'arrival_date'=>$b->flight?->arrival_date,
                    'qty'=>$b->qty,
                    'total_amount'=>$b->total_amount,
                    'payment_status'=>$b->payment_status?true:false
                );
            }
        }
        return response($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }
    public function store()
    {
        
    }

   
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $b = Booking::find($id);
        $data=array();
        if($b){
                $data=array(
                    'id'=>$b->id,
                    'flight'=>$b->flight?->flight_number,
                    'sclass'=>$b->sclass?->name,
                    'booking_date'=>$b->booking_date,
                    'departure_date'=>$b->flight?->departure_date,
                    'arrival_date'=>$b->flight?->arrival_date,
                    'qty'=>$b->qty,
                    'total_amount'=>$b->total_amount,
                    'payment_status'=>$b->payment_status?true:false
                );
            
        }
        return response($data, 200);
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
