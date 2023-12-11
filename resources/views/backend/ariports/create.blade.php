@extends('backend.layouts.app')
@section('pageHeading', 'Add New Airports')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('ariports.store') }}" method="post">
            @csrf
             <!-- <div class="form-group">
                <label for="city_id">City Id</label>
                <input type="city_id" id="city_id" class="form-control">
            </div>  -->

            <div class="form-group">
                <label for="name">Name</label>
                <select name="ariport" id="ariport" class="form-control">
                    <option value="ZAZ">Zazira Airport</option>
                    <option value="ABC">Airport ABC</option>
                    <option value="XYZ">XYZ International Airport</option>
                </select>
            </div>
           <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
