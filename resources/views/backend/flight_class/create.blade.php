@extends('backend.layouts.app')
@section('pageHeading', 'Add New Flight Class')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('flight_class.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="flight_id">Flight Id</label>
                <input type="text" name="flight_id" id="flight_id" class="form-control">
            </div>
            <div class="form-group">
                <label for="seat_id">Seat Id</label>
                <input type="text" name="seat_id" id="seat_id" class="form-control">
            </div>
            <div class="form-group">
                <label for="class_name">Class Name</label>
                <select name="class_name" id="class_name" class="form-control">
                    <option value="one">Ecomomic</option>
                    <option value="two">Business</option>
                    <option value="three">Premium</option>
                    <option value="four">First Class</option>
                </select>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control">
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
