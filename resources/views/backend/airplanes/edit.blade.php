@extends('backend.layouts.app')
@section('pageHeading', 'Add New Airplanes')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('airplanes.update', $airplanes->id) }}" method="post">
                @csrf
                @method('PATCH')
                 <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $airplanes->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" value="{{$airplanes->description}}" class="form-control"></textarea>
                </div>
               <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

