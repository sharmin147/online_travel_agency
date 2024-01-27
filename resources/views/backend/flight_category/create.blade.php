@extends('backend.layouts.app')
@section('pageHeading', 'Add New Flight Category')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('flight_category.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <select name="name" id="name" class="form-control">
                    <option value="One Way">One Way</option>
                    <option value="Multicity">Multicity</option>
                    <option value="Round trip">Round Trip</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
           <div class="form-group">
                <label for="baggage_allowance">Baggage Allowence</label>
                <input type="number" name="baggage_allowance" id="baggage_allowance" class="form-control">
            </div>
            <div class="form-group">
                <label for="refundable">Refundable</label>
                <select name="refundable" id="refundable" class="form-control">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
