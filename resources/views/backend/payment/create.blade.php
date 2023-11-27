@extends('backend.layouts.app')
@section('pageHeading', 'Add New payment')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('payment.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="customer_id">Customer Id</label>
                <input type="integer" name="customer_id" id="customer_id" class="form-control">
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount" class="form-control">
            </div>
            <div class="form-group">
                <label for="payment_method">Pay Method</label>
                <select name="payment_method" id="payment_method" class="form-control">
                    <option value="one">Mobile Banking</option>
                    <option value="two">Cash</option>
                    <option value="three">Check</option>
                    <option value="four">Bank</option>
                </select>
            </div>
            <div class="form-group">
                <label for="transaction_id">Trans Id</label>
                <input type="number" name="transaction_id" id="transaction_id" class="form-control">
            </div>
            <div class="form-group">
                <label for="payment_status">Payment Status</label>
                <select name="payment_status" id="payment_status" class="form-control">
                    <option value="one">Completed</option>
                    <option value="two">Pending</option>
                    <option value="three">Failed</option>
                </select>
            </div>
              <div class="form-group">
                <label for="payment_date">Payment Date</label>
                <input type="date" name="payment_date" id="payment_date" class="form-control">
            </div>
           <div class="form-group">
                <label for="notes">Notes</label>
                <input type="text" name="notes" id="notes" class="form-control">
            </div>
            
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
