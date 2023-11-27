@extends('backend.layouts.app')
@section('pageHeading', 'Add New Booking')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('bookings.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="customer_id">Customer Id</label>
                <input type="text" name="customer_id" id="customer_id" class="form-control">
            </div>
            <div class="form-group">
                <label for="seat_id">Flight Id</label>
                <input type="number" name="flight_id" id="flight_id" class="form-control">
            </div>
            <div class="form-group">
                <label for="seat_id">Seat Id</label>
                <input type="number" name="seat_id" id="seat_id" class="form-control">
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
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="1">Accept</option>
                    <option value="0">Pending</option>
                </select>
            </div>
            
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
