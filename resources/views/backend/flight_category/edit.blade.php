@extends('backend.layouts.app')
@section('pageHeading', 'Add New Flight Category')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('flight_category.update', $flight_category->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="category">Category Name</label>
                    <select name="name" id="name" class="form-control">
                        <option value="One Way" @if($flight_category->name == 'One Way') selected @endif>One Way</option>
                        <option value="Multicity" @if($flight_category->name == 'Multicity') selected @endif>Multicity</option>
                        <option value="Round Trip" @if($flight_category->name == 'Round Trip') selected @endif>Round Trip</option>
                   </select>
                </div>

                 <div class="form-group">
                    <label for="descripton">Description</label>
                    <input type="text" name="description" value="{{ $flight_category->description }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="baggage_allowance">Baggage Allowence</label>
                    <input type="number" name="baggage_allowance" value="{{ $flight_category->baggage_allowance }}" id="baggage_allowance" class="form-control">
                </div>
                <div class="form-group">
                    <label for="refundable">Refundable</label>
                    <select name="refundable" id="refundable" class="form-control">
                        <option value="1" {{ $flight_category->refundable == "1" ? "selected" : "" }}>Yes</option>
                        <option value="0" {{ $flight_category->refundable== "0" ? "selected" : "" }}>No</option>
                    </select>
                </div>

                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

