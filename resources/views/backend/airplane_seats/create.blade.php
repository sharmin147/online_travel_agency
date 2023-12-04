@extends('backend.layouts.app')
@section('pageHeading', 'Add New Airplaneseats')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('airplane_seats.store') }}" method="post">
            @csrf
           
            <div class="form-group">
                <label for="airplane_id">Airpalne Id</label>
                <input type="number" name="airplane_id" id="airplane_id" class="form-control">
            </div>
            <div class="form-group">
                <label for="flight_class_id">Category Id</label>
                <input type="number" name="flight_class_id" id="flight_class_id" class="form-control">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="quantity" name="quantity" id="quantity" class="form-control">
            </div>
         <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
