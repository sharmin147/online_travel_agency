@extends('backend.layouts.app')
@section('pageHeading', 'Add New Bookings')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('seats.update', $seats->id) }}" method="post">
                @csrf
                @method('PATCH')
               <div class="form-group">
                    <label for="flight_id">Flight Id</label>
                    <input type="text" name="flight_id" value="{{ $seats->flight_id }}" class="form-control">
                </div>
                  <div class="form-group">
                    <label for="category_id">Category Id</label>
                    <input type="number" name="category_id" value="{{ $seats->category_id }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="class_id">Seat Id</label>
                    <input type="text" name="class_id" value="{{ $seats->class_id }}" class="form-control">
                </div>
               <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1" {{ $seats->rstatus == "Available" ? "selected" : "" }}>Available</option>
                        <option value="0" {{ $seats->rstatus == "Reserved" ? "selected" : "" }}>Reserved</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

