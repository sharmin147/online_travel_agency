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
                   <select name="name" id="name" class="form-control">
                        <option value="one" {{ $city->name == "one" ? "selected" : "" }}>Bangladesh</option>
                        <option value="two" {{ $city->name == "two" ? "selected" : "" }}>India</option>
                        <option value="three" {{ $city->name == "three" ? "selected" : "" }}>Dubai</option>
                    </select>
                </div>
               <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection

