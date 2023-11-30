@extends('backend.layouts.app')
@section('pageHeading', 'Add New City')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('city.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <select name="name" id="name" class="form-control">
                    <option value="one">Bangladesh</option>
                    <option value="two">India</option>
                    <option value="three">Dubai</option>
                  
                </select>
            </div>
           <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
