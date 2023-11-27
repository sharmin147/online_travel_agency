@extends('backend.layouts.app')
@section('pageHeading', 'Add New Flight Category')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('flight_category.update', $flight_category->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <select name="category_name" id="category_name" class="form-control">
                        <option value="one" {{ $flight_category->category_name == "one" ? "selected" : "" }}>One Way</option>
                        <option value="two" {{ $flight_category->category_name == "two" ? "selected" : "" }}>Round Trip</option>
                        <option value="three" {{ $flight_category->category_name == "three" ? "selected" : "" }}>Multiple</option>
                        <option value="four" {{ $flight_category->category_name == "four" ? "selected" : "" }}>Group Flight</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" value="{{ $flight_category->description }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" value="{{ $flight_category->price }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="baggage_allowance">Baggage Allowance</label>
                    <input type="text" name="baggage_allowance" value="{{ $flight_category->baggage_allowance }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="refundable">Refundable</label>
                    <select name="refundable" id="refundable" class="form-control">
                        <option value="1" {{ $flight_category->refundable == "Yes" ? "selected" : "" }}>Yes</option>
                        <option value="0" {{ $flight_category->refundable == "No" ? "selected" : "" }}>No</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

