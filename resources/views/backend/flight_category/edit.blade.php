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
                    <input type="text" name="name" id="name" class="form-control" value="{{ $flight_category->name }}">
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

