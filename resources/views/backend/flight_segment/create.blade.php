@extends('backend.layouts.app')

@section('title',trans('Create Flight Segment'))
@section('page',trans('Create'))
@section('content')
  <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route('flight_segment.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="flight_number" style="color: green;">Flight Num</label>
                                            <input type="string" id="flight_number" class="form-control" value="{{ old('flight_number')}}" name="flight_number">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="departure_city" style="color: green;">Departure City</label>
                                            <input type="text" id="departure_city" class="form-control" value="{{ old('departure_city')}}" name="departure_city">
                                            @if($errors->has('departure_city"'))
                                                <span class="text-danger"> {{ $errors->first('departure_city"') }}</span>
                                            @endif 
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="arrival_city" style="color: green;">Arrival City</label>
                                            <input type="text" id="arrival_city" class="form-control" value="{{ old('arrival_city')}}" name="arrival_city">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="departure_date" style="color: green;">Departure Date</label>
                                            <input type="date" id="departure_date" class="form-control" value="{{ old('departure_date')}}" name="departure_date">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="arrival_date" style="color: green;">Arrival Date</label>
                                            <input type="date" id="arrival_date" class="form-control" value="{{ old('arrival_date')}}" name="arrival_date">
                                        </div>
                                    </div>
                                  <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="is_direct_flight" style="color: green;">Is direct flight</label>
                                            <select id="is_direct_flight" class="form-control" name="is_direct_flight">
                                                <option value="1" @if(old('is_direct_flight')==1) selected @endif>Yes</option>
                                                <option value="0" @if(old('is_direct_flight')==0) selected @endif>No</option>
                                            </select>
                                         </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="connection_airport" style="color: green;">Connection Airport</label>
                                            <input type="date" id="connection_airport" class="form-control" value="{{ old('connection_airport')}}" name="connection_airport">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="connection_airport" style="color: green;">Connection Duration</label>
                                            <input type="date" id="connection_duration" class="form-control" value="{{ old('connection_duration')}}" name="connection_duration">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="price" style="color: green;">Price</label>
                                            <input type="decimal" id="price" class="form-control" value="{{ old('price')}}" name="price">
                                        </div>
                                    </div>
                              </div>

                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
