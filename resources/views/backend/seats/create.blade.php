@extends('backend.layouts.app')
@section('pageHeading', 'Add New Seats')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('seats.store') }}" method="post">
            @csrf
           
            <div class="form-group">
                <label for="seat_id">Flight Id</label>
                <input type="number" name="flight_id" id="flight_id" class="form-control">
            </div>
            <div class="form-group">
                <label for="category_id">Category Id</label>
                <input type="number" name="category_id" id="category_id" class="form-control">
            </div>
            <div class="form-group">
                <label for="class_id">Class Id</label>
                <input type="number" name="class_id" id="class_id" class="form-control">
            </div>
           <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="1">Available</option>
                    <option value="0">Reserved</option>
                </select>
            </div>
            
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
