@extends('backend.layouts.app')
@section('pageHeading', 'Add New Flight Category')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('flight_category.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
