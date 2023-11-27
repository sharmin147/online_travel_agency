@extends('backend.layouts.app')
@section('pageHeading', 'Add New airplane')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('airplanes.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
           <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
