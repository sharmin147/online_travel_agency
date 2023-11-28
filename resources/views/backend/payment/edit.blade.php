@extends('backend.layouts.app')
@section('pageHeading', 'Add New Payments')
@section('content')
    <div class="row">
        <div class="col-sm-12">
           <form action="{{ route('payment.update', $payment->id) }}" method="post">
                @csrf
                @method('PATCH')
                 <div class="form-group">
                    <label for="customer_id">Customer Id</label>
                    <input type="number" name="customer_id" value="{{ $payment->customer_id }}" class="form-control">
                </div>
                  <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="number" name="amount" value="{{ $payment->amount }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="payment_method">Pay Method</label>
                    <input type="text" name="payment_method" value="{{ $payment->payment_method}}" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="transation_id">Trans Id</label>
                    <input type="integer" name="transation_id" value="{{ $payment->pransation_id}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="payment_status">Payment Status</label>
                    <select name="payment_status" id="payment_status" class="form-control">
                        <option value="one" {{ $bookings->payment_status == "one" ? "selected" : "" }}>Completed</option>
                        <option value="two" {{ $bookings->payment_status == "two" ? "selected" : "" }}>Pending</option>
                        <option value="three" {{ $bookings->payment_status == "three" ? "selected" : "" }}>Failed</option>
                    </select>
                </div>
                 <div class="form-group">
                    <label for="payment_date">Payment date</label>
                    <input type="date" name="payment_date" value="{{ $payment->payment_date}}" class="form-control">
                </div>
               <div class="form-group">
                    <label for="notes">Notes</label>
                    <input type="text" name="notes" value="{{ $payment->notes}}" class="form-control">
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

