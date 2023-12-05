@extends('backend.layouts.app')
@section('pageHeading', 'Add New Flight Class')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('flight_class.update', $flight_class->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Class Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $flight_class->name }}">
                </div>
               <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

