@extends('backend.layouts.app')
@section('pageHeading', 'Add New Airplanes')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('city.update', $city->id) }}" method="post">
                @csrf
                @method('PATCH')
                 <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $city->name }}" class="form-control">
                </div>
               <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

