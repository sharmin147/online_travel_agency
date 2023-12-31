<?php

namespace App\Http\Controllers\frontenduser;
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
    
    public function index()
    {
        $bookings = Booking::where('customer_id',currentUserId())->latest()->paginate(4);
        return view('frontenduser.booking.index', ['bookings' => $bookings]);
    }

  
    public function create()
    {
        $city = City::get();
        $fclass = FlightClass::get();
        $fcategory = FlightCategory::get();
        return view('frontenduser.booking.create',compact('city','fclass','fcategory'));
    }
    public function flight_search(Request $request){
        $to = $request->to;
        $from = $request->from;
        $is_direct_flight = $request->is_direct_flight;
        $travel_date = $request->travel_date;
        $route=flightRoute::where('departure_city',$from)->where('arrival_city',$to)->pluck('id');
        $flight=FlightSegment::whereIn('flight_route_id',$route)->where('is_direct_flight',$is_direct_flight)->where('departure_date',$travel_date);
        $data="";
        if($flight->count() > 0){
            foreach($flight->get() as $f){
                $data.="<option data-arrival='".$f->arrival_date."' value='".$f->id."'>".$f->flight_number."-".$f->airline."</option>";
            }
        }
        print_r(json_encode($data));
    }

    public function flight_seat_search(Request $request){
        $flight_id = $request->flight_id;
        $flight_class_id = $request->flight_class_id;
        $flight_category_id = $request->flight_category_id;
        $flight_route_id = $request->flight_route_id;
        $flight=FlightSegment::find($flight_id);

        $seat=AirplaneSeat::where('airplane_id',$flight->airplane_id)->where('flight_class_id',$flight_class_id)->pluck('quantity')->toArray();
        $booked=Booking::where('flight_id',$flight_id)->where('flight_class_id',$flight_class_id)->pluck('qty')->toArray();
        if(count($booked) > 0)
            $availabla_seat=($seat[0] - $booked[0]);
        else
            $availabla_seat=$seat[0] ?? 0;

        $price=FlightPrice::where('flight_category_id',$flight_category_id)
                            ->where('flight_class_id',$flight_class_id)
                            ->where('flight_route_id',$flight->flight_route_id)
                            ->pluck('price')->toArray();
        $data=array("available"=>$availabla_seat,"price"=>$price[0] ?? 0);
        
        print_r(json_encode($data));
    }

   
    public function store(Request $request)
    {
        
        $data = new Booking;
        $data->customer_id=currentUserId();
        $data->flight_id=$request->flight_id;
        $data->flight_class_id=$request->flight_class_id;
        $data->flight_category_id=$request->flight_category_id;
        $data->booking_date=date('Y-m-d');
        $data->qty=$request->seat_qty;
        $data->amount=($request->seat_price * $request->seat_qty);
        $data->vat=$data->amount * 0.15;
        $data->total_amount=$data->amount + $data->vat;
        $data->status=0;
        if($data->save()){
            $pay=new Payment;
            $pay->booking_id=$data->id;
            $pay->customer_id=$data->customer_id;
            $pay->amount=$request->amount;
            $pay->payment_method="Online Payment";
            $pay->transaction_id=$request->transaction_id;
            $pay->payment_status=1;
            $pay->payment_date=date('Y-m-d');
            $pay->notes="";
            $pay->save();
        }
        return redirect()->route('user-booking.index');
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
