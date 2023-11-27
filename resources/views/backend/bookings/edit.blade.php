@extends('backend.layouts.app')
@section('pageHeading', 'Add New Bookings')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('bookings.update', $bookings->id) }}" method="post">
                @csrf
                @method('PATCH')
                 <div class="form-group">
                    <label for="customer_id">Flight Id</label>
                    <input type="number" name="customer_id" value="{{ $bookings->flight_id }}" class="form-control">
                </div>
                  <div class="form-group">
                    <label for="flight_id">Flight Id</label>
                    <input type="text" name="flight_id" value="{{ $bookings->flight_id }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="seat_id">Seat Id</label>
                    <input type="text" name="seat_id" value="{{ $bookings->seat_id }}" class="form-control">
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
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1" {{ $flight_class->rstatus == "Accept" ? "selected" : "" }}>Accept</option>
                        <option value="0" {{ $flight_class->rstatus == "Pending" ? "selected" : "" }}>Pending</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

