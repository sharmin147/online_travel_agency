<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;

class BookingController extends Controller
{
 
    public function index($r)
    {
        $bookings = Booking::where('customer_id',$r)->latest()->get();
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

 
    public function show($id)
    {
        $b = Booking::find($id);
        $pay = Payment::where('booking_id',$b->id)->first()->toArray();
        $data=array();
        if($b){
                $data['flight']=array(
                    'id'=>$b->id,
                    'customer'=>$b->customer?->name,
                    'email'=>$b->customer?->email,
                    'flight'=>$b->flight?->flight_number,
                    'sclass'=>$b->sclass?->name,
                    'booking_date'=>$b->booking_date,
                    'departure_date'=>$b->flight?->departure_date,
                    'arrival_date'=>$b->flight?->arrival_date,
                    'qty'=>$b->qty,
                    'total_amount'=>$b->total_amount,
                    'payment_status'=>$b->payment_status?true:false
                );
                $data['payment']=$pay;
        }
        return response($data, 200);
    }

    public function edit(string $id)
    {
          $bookings = Booking::find($id);
         return view('backend.bookings.edit', compact('bookings'));
    }

  
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

  
    public function destroy(Booking $booking)
    {
           $booking->delete();
        return redirect('bookings')->with('message','Data deleted successfully');
    }
}
