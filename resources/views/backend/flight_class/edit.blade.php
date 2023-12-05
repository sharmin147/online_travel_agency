@extends('backend.layouts.app')
@section('pageHeading', 'Add New Flight Category')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('flight_class.update', $flight_class->id) }}" method="post">
                @csrf
                @method('PATCH')
                  <div class="form-group">
                    <label for="class_name">Class Name</label>
                    <input type="text" name="class_name" value="{{ $flight_class->class_name }}" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="descripton">Description</label>
                    <input type="text" name="description" value="{{ $flight_class->description }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="refundable">Refundable</label>
                    <select name="refundable" id="refundable" class="form-control">
                        <option value="one" {{ $flight_class->crefundable == "one" ? "selected" : "" }}>Yes</option>
                        <option value="two" {{ $flight_class->refundable== "two" ? "selected" : "" }}>No</option>
                </div>
               <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

