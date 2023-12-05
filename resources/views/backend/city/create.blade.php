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
                    <option value="Ctg">Ctg</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Doha">Doha</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Tokyo">Tokyo</option>
                    <option value="Berlin">Berlin</option>
                 </select>
            </div>
           <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
