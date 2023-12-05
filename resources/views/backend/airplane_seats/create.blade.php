@extends('backend.layouts.app')
@section('pageHeading', 'Add New Airplaneseats')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('airplane_seats.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="form-group">
                        <label for="airplane_id">Airplan</label>
                        <select id="airplane_id" class="form-control" name="airplane_id">
                            <option value="">Select Airplan</option>
                            @forelse($airplane as $ap)
                                <option value="{{$ap->id}}" @if(old('airplane_id')==$ap->id) selected @endif>{{$ap->name}}</option>
                            @empty
                            @endforelse
                        </select>
                        @if($errors->has('airplane_id"'))
                            <span class="text-danger"> {{ $errors->first('dairplane_id"') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="form-group">
                        <label for="flight_class_id">Class</label>
                        <select id="flight_class_id" class="form-control" name="flight_class_id">
                            <option value="">Select Class</option>
                            @forelse($class as $ap)
                                <option value="{{$ap->id}}" @if(old('flight_class_id')==$ap->id) selected @endif>{{$ap->name}}</option>
                            @empty
                            @endforelse
                        </select>
                        @if($errors->has('flight_class_id"'))
                            <span class="text-danger"> {{ $errors->first('flight_class_id"') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="quantity" name="quantity" id="quantity" class="form-control">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
