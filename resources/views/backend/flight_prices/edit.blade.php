@extends('backend.layouts.app')
@section('pageHeading', 'Add New Flight Category')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('flight_prices.update', $flight_prices->id) }}" method="post">
                @csrf
                @method('PATCH')
                  <div class="form-group">
                    <label for="flight_category_id">Flight category Id</label>
                    <input type="integer" name="flight_category_id" value="{{ $flight_prices->flight_category_id }}" class="form-control">
                 </div>
                 <div class="form-group">
                    <label for="flight_class_id">Flight Class Id</label>
                    <input type="integer" name="flight_category_id" value="{{ $flight_prices->flight_class_id }}" class="form-control">
                 </div>
                 <div class="form-group">
                    <label for="flight_route_id">Flight Route Id</label>
                    <input type="integer" name="flight_route_id" value="{{ $flight_prices->flight_route_id }}" class="form-control">
                 </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="decimal" name="price" value="{{ $flight_prices->price }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1" {{ $flight_prices->rstatus == "Paid" ? "selected" : "" }}>Paid</option>
                        <option value="0" {{ $flight_prices->rstatus == "Pending" ? "selected" : "" }}>Pending</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

