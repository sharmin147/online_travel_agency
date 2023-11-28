<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $payments = Payment::latest()->paginate(5);
        return view('backend.payment.index', ['payments' => $payments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('backend.payment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $paymentsInstance = new Payment;
         $paymentsInstance->customer_id=$request->customer_id;
         $paymentsInstance->amount=$request->amount;
         $paymentsInstance->payment_method=$request->payment_method;
         $paymentsInstance->transaction_id=$request->transaction_id;
         $paymentsInstance->payment_status=$request->payment_status;
         $paymentsInstance->payment_date=$request->payment_date;
         $paymentsInstance->notes=$request->notes;
         $paymentsInstance->save();
         return redirect('payment');
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit(string $id)
    {
          $payments = Payment::find($id);
         return view('backend.payment.edit', compact('payments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
         $payment->customer_id=$request->customer_id;
         $payment->amount=$request->amount;
         $payment->payment_method=$request->payment_method;
         $payment->transaction_id=$request->transaction_id;
         $payment->payment_status=$request->payment_status;
         $payment->payment_date=$request->payment_date;
         $payment->notes=$request->notes;
         $payment->save();
         return redirect('payment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect('payment')->with('message','Data deleted successfully');
    }
}
