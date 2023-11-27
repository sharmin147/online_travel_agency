@extends('backend.layouts.app')
@section('pageHeading', 'Add New Flight Category')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('flight_class.update', $flight_class->id) }}" method="post">
                @csrf
                @method('PATCH')
                  <div class="form-group">
                    <label for="flight_id">Flight Id</label>
                    <input type="text" name="flight_id" value="{{ $flight_class->flight_id }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="seat_id">Seat Id</label>
                    <input type="text" name="seat_id" value="{{ $flight_class->seat_id }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="flight_class">Category Name</label>
                    <select name="flight_class" id="flight_class" class="form-control">
                        <option value="one" {{ $flight_class->class_name == "one" ? "selected" : "" }}>Economic</option>
                        <option value="two" {{ $flight_class->class_name == "two" ? "selected" : "" }}>Business</option>
                        <option value="three" {{ $flight_class->class_name == "three" ? "selected" : "" }}>Premium</option>
                        <option value="four" {{ $flight_class->class_name == "four" ? "selected" : "" }}>First Class</option>
                    </select>
                </div>
               
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" value="{{ $flight_class->price }}" class="form-control">
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

