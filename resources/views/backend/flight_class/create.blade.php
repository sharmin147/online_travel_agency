@extends('backend.layouts.app')
@section('pageHeading', 'Add New Flight Class')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('flight_class.store') }}" method="post">
            @csrf
           
            <div class="form-group">
                <label for="class_name">Class Name</label>
                <select name="class_name" id="class_name" class="form-control">
                    <option value="one">Ecomomic</option>
                    <option value="two">Business</option>
                    <option value="three">Premium</option>
                    <option value="four">First Class</option>
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
