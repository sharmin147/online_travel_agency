@extends('backend.layouts.app')
@section('pageHeading', 'Add New Airplaneseats')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('airplane_seats.update', $airplane_seats->id) }}" method="post">
                @csrf
                @method('PATCH')
               <div class="form-group">
                    <label for="airplane_id">Flight Id</label>
                    <input type="number" name="airplane_id" value="{{ $airplane_seats->airplane_id}}" class="form-control">
                </div>
                  <div class="form-group">
                    <label for="flight_class_id">Flight class Id</label>
                    <input type="number" name="flight_class_id" value="{{ $airplane_seats->flight_class_id}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="seat_id">Quantity</label>
                    <input type="text" name="quantity" value="{{ $airplane_seats->class_id }}" class="form-control">
                </div>
             <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

