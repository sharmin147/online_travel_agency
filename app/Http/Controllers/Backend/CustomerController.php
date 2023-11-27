<?php

namespace App\Http\Controllers\Backend;

use App\Models\Customer; // Updated namespace for Customer model
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    
    {
        $customers = Customer::latest()->paginate(10); // Fetch customers with pagination (10 records per page)

        return view('backend.customers.index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customersInstance = new Customer; // Updated variable name
        $customersInstance->customer_id=$request->customer_id;
        $customersInstance->first_name = $request->first_name;
        $customersInstance->last_name = $request->last_name;
        $customersInstance->email = $request->email;
         $customersInstance->status = $request->status;
        $customersInstance->action = $request->action;
        $customersInstance->save();

        return redirect('customers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Logic to show a specific customer
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customers = Customer::find($id); // Fetch customer by ID

        return view('backend.customers.edit', compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->customer_id=$request->customer_id;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
         $customer->status = $request->status;
        $customer->action = $request->action;
        $customer->save();

        return redirect('customers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('customers')->with('message','Data deleted successfully');
    }

}
