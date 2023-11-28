@extends('backend.layouts.app')
@section('pageHeading', 'Add New Payment')
@section('content')
    <div class="row">
        <div class="col-sm-12">
           <form action="{{ route('payment.update', $payments->id) }}" method="post">
                @csrf
                @method('PATCH')
                 <div class="form-group">
                    <label for="customer_id">Customer Id</label>
                    <input type="integer" name="customer_id" value="{{ $payments->customer_id }}" class="form-control">
                </div>
                  <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="text" name="amount" value="{{ $payments->amount }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="payment_method">Pay Method</label>
                    <input type="text" name="payment_method" value="{{ $payments->payment_method}}" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="transation_id">Trans Id</label>
                    <input type="integer" name="transation_id" value="{{ $payments->pransation_id}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="payment_status">Payment Status</label>
                    <select name="payment_status" id="payment_status" class="form-control">
                        <option value="one" {{ $payments->payment_status == "one" ? "selected" : "" }}>Completed</option>
                        <option value="two" {{ $payments->payment_status == "two" ? "selected" : "" }}>Pending</option>
                        <option value="three" {{ $payments->payment_status == "three" ? "selected" : "" }}>Failed</option>
                    </select>
                </div>
                 <div class="form-group">
                    <label for="payment_date">Payment date</label>
                    <input type="date" name="payment_date" value="{{ $payments->payment_date}}" class="form-control">
                </div>
               <div class="form-group">
                    <label for="notes">Notes</label>
                    <input type="text" name="notes" value="{{ $payments->notes}}" class="form-control">
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

