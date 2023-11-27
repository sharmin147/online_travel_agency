@extends('backend.layouts.app')
@section('pageHeading', 'Add New Flight Category')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('flight_category.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="category_name">Category Name</label>
                <select name="category_name" id="category_name" class="form-control">
                    <option value="one">One Way</option>
                    <option value="two">Round Trip</option>
                    <option value="three">Multiple</option>
                    <option value="four">Group Flight</option>
                </select>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
               <textarea name="description" id="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="baggage_allowance">Baggage Allowance</label>
                <input type="text" name="baggage_allowance" id="baggage_allowance" class="form-control">
            </div>
            <div class="form-group">
                <label for="refundable">Refundable</label>
                <select name="refundable" id="refundable" class="form-control">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
