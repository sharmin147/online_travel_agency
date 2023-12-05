@extends('backend.layouts.app')
@section('pageHeading', 'Add New Flight Category')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('flight_prices.update', $flightPrice->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="flight_category_id">Flight Category</label>
                    <select name="flight_category_id" id="flight_category_id" class="form-control">
                        <option value="">Select Category</option>
                        @forelse($category as $cat)
                            <option value="{{$cat->id}}" @if(old('flight_category_id',$flightPrice->flight_category_id)==$cat->id) selected @endif>{{$cat->name}}</option>
                        @empty

                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label for="flight_class_id">Flight Class</label>
                    <select name="flight_class_id" id="flight_class_id" class="form-control">
                        <option value="">Select Class</option>
                        @forelse($fclass as $cat)
                            <option value="{{$cat->id}}" @if(old('flight_class_id',$flightPrice->flight_class_id)==$cat->id) selected @endif>{{$cat->name}}</option>
                        @empty

                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label for="flight_route_id">Flight Route</label>
                    <select name="flight_route_id" id="flight_route_id" class="form-control">
                        <option value="">Select Route</option>
                        @forelse($froute as $cat)
                            <option value="{{$cat->id}}" @if(old('flight_route_id',$flightPrice->flight_route_id)==$cat->id) selected @endif>{{$cat->name}}</option>
                        @empty

                        @endforelse
                    </select>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="decimal" name="price" value="{{ $flightPrice->price }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1" {{ $flightPrice->status == "1" ? "selected" : "" }}>Yes</option>
                        <option value="0" {{ $flightPrice->status== "0" ? "selected" : "" }}>No</option>
                    </select>
                </div>

                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

