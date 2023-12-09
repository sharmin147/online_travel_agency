@extends('backend.layouts.app')
@section('pageTitle',trans('Update Segment'))
@section('pageSubTitle',trans('Update'))
@section('content')

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
                                     <label for="airplane_id" style="color: green;">Airplan</label>
                                       <select id="airplane_id" class="form-control" name="airplane_id">
                                        <option value="">Select Airplan</option>
                                     @forelse($airplane as $ap)
                                    <option value="{{$ap->id}}" @if(old('airplane_id',$flight_segment->airplane_id)==$ap->id) selected @endif>{{$ap->name}}</option>
                                     @empty
                                     @endforelse
                                    </select>
                                  @if($errors->has('airplane_id"'))
                                <span class="text-danger"> {{ $errors->first('dairplane_id"') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="flight_number" style="color: green;">Flight Num</label>
                            <input type="string" id="flight_number" class="form-control" value="{{ old('flight_number',$flight_segment->flight_number)}}" name="flight_number">
                        </div>
                    </div>
                     <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="flight_route_id" style="color: green;">Flight Route</label>
                            <select id="flight_route_id" class="form-control" name="flight_route_id">
                                <option value="">Select Route</option>
                                @forelse($flightRoute as $c)
                                    <option class="ac ac{{$c->id}}" value="{{$c->id}}" @if(old('flight_route_id',$flight_segment->flight_route_id)==$c->id) selected @endif>{{$c->name}}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="departure_date" style="color: green;">Departure Date</label>
                            <input type="date" id="departure_date" class="form-control" value="{{ old('departure_date',$flight_segment->departure_date)}}" name="departure_date">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="arrival_date" style="color: green;">Arrival Date</label>
                            <input type="date" id="arrival_date" class="form-control" value="{{ old('arrival_date',$flight_segment->arrival_date)}}" name="arrival_date">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="is_direct_flight" style="color: green;">Is direct flight</label>
                            <select id="is_direct_flight" class="form-control" name="is_direct_flight">
                                <option value="1" @if(old('is_direct_flight',$flight_segment->is_direct_flight)==1) selected @endif>Yes</option>
                                <option value="0" @if(old('is_direct_flight',$flight_segment->is_direct_flight)==0) selected @endif>No</option>
                            </select>
                            </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="connection_airport" style="color: green;">Connection Airport</label>
                            <select id="connection_airport" class="form-control" name="connection_airport">
                                <option value="">Select Airport</option>
                                @forelse($airport as $c)
                                    <option value="{{$c->id}}" @if(old('connection_airport',$flight_segment->connection_airport)==$c->id) selected @endif>{{$c->name}}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="connection_airport" style="color: green;">Connection Duration</label>
                            <input type="text" id="connection_duration" class="form-control" value="{{ old('connection_duration',$flight_segment->connection_duration)}}" name="connection_duration">
                        </div>
                    </div>
                    {{-- <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="airline" style="color: green;">Airline</label>
                            <input type="text" id="airline" class="form-control" value="{{ old('airline',$flight_segment->airline)}}" name="airline">
                        </div>
                    </div> --}}
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="airline" style="color: green;">Airline</label>
                            <select id="airline" class="form-control" name="airline">
                                <option value="">Select Airline</option>
                                <option value="American Airlines" @if(old('airline',$flight_segment->airline)=="American Airlines") selected @endif>American Airlines</option>
                                <option value="Delta Air Lines" @if(old('airline',$flight_segment->airline)=="Delta Air Lines") selected @endif>Delta Air Lines</option>
                                <option value="United Airlines" @if(old('airline',$flight_segment->airline)=="United Airlines") selected @endif>United Airlines</option>
                           </select>
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
