@extends('backend.layouts.app')

@section('pageTitle',trans('Update Segment'))
@section('pageSubTitle',trans('Update'))
@section('content')
  <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                          <form class="form" method="post" enctype="multipart/form-data" action="{{route('flight_segment.update',encryptor('encrypt',$flight_segment->id))}}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$flight_segment->id)}}">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="flight_number">Flight Number</label>
                                            <input type="number" id="flight_number" class="form-control" value="{{ old('flight_number',$flight_segment->flight_number)}}" name="flight_number">
                                         </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="arrival_city">Arrival City</label>
                                            <input type="text" id="arrival_city" class="form-control" value="{{ old('arrival_city',$flight_segment->arrival_city)}}" name="arrival_city">
                                         </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="departure_city">Departure City</label>
                                            <input type="text" id="departure_city" class="form-control" value="{{ old('departure_city',$flight_segment->departure_city)}}" name="departure_city">
                                         </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="departure_date">Departure Date</label>
                                            <input type="date" id="departure_date" class="form-control" value="{{ old('departure_date',$flight_segment->departure_date)}}" name="departure_date">
                                         </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="arrival_date">Arrival Date</label>
                                            <input type="date" id="arrival_date" class="form-control" value="{{ old('arrival_date',$flight_segment->arrival_date)}}" name="arrival_date">
                                         </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="is_direct_flight">Is Direct Flight</label>
                                            <select id="is_direct_flight" class="form-control" name="status">
                                                <option value="1" @if(old('is_direct_flight',$flight_segment->is_direct_flight)==1) selected @endif>Yes</option>
                                                <option value="0" @if(old('is_direct_flight',$flight_segment->is_direct_flight)==0) selected @endif>No</option>
                                            </select>
                                          </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="connection_airport">Connection Airport</label>
                                            <input type="text" id="connection_airport" class="form-control" value="{{ old('connection_airport',$flight_segment->connection_airport)}}" name="connection_airport">
                                         </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="connection_duration">Connection Duration</label>
                                            <input type="date" id="connection_duration" class="form-control" value="{{ old('connection_airport',$flight_segment->connection_duration)}}" name="connection_duration">
                                         </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="decimal" id="price" class="form-control" value="{{ old('price',$flight_segment->price)}}" name="price">
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
