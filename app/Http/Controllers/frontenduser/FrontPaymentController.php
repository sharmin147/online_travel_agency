<?php
namespace App\Http\Controllers;
use App\Models\FrontPayment;
use Illuminate\Http\Request;
use App\Models\Booking;
class FrontPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $frontpayment = FrontPayment::where('booking_id',currentUserId())->latest()->paginate(5);

        return view('frontenduser.frontpayment.index', ['prontpayment' => $frontpayment]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $booking = Booking::get();
        return view('frontenduser.frontpayment.create',compact('booking'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $frontpayment= new FrontPayment;
        $frontpayment->booking_id->$request->booking_id;
        $frontpayment->amount=$request->amount;
        $frontpayment->payment_method=$request->payment_method;
        $frontpayment->total_amount=$request->total_amount;
        $frontpayment->save();
        return redirect()->route('frontpayment.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(FrontPayment $frontPayment)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FrontPayment $frontPayment)
    {
          return view('frontenduser.frontpayment.edit', compact('frontpayment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FrontPayment $frontPayment)
    {
        $frontPayment->booking_id->$request->booking_id;
        $frontPayment->amount=$request->amount;
        $frontPayment->payment_method=$request->payment_method;
        $frontPayment->total_amount=$request->total_amount;
        $frontPayment->save();
        return redirect()->route('frontpayment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FrontPayment $frontPayment)
    {
      $frontPayment->delete();
        return redirect()->route('frontpayment.index')->with('message','Data deleted successfully');
    }
}
