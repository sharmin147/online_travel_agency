@extends('backend.layouts.app')
@section('pageHeading', 'Add New Bookings')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('bookings.update', $bookings->id) }}" method="post">
                @csrf
                @method('PATCH')
                 
                <div class="form-group">
                    <label for="payment_status">Payment Status</label>
                    <select name="payment_status" id="payment_status" class="form-control">
                        <option value="1" {{ $bookings->payment_status == "1" ? "selected" : "" }}>Completed</option>
                        <option value="2" {{ $bookings->payment_status == "2" ? "selected" : "" }}>Pending</option>
                        <option value="3" {{ $bookings->payment_status == "3" ? "selected" : "" }}>Failed</option>
                    </select>
                </div>
              <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1" {{ $bookings->status == "1" ? "selected" : "" }}>Accept</option>
                        <option value="0" {{ $bookings->status == "0" ? "selected" : "" }}>Pending</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

