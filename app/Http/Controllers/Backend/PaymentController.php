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
        $payments->customer_id=$request->customer_id;
         $payments->amount=$request->amount;
         $payments->payment_method=$request->payment_method;
         $payments->transaction_id=$request->transaction_id;
         $payments->payment_status=$request->payment_status;
         $payments->payment_date=$request->payment_date;
         $payments->notes=$request->notes;
         $payments->save();
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
