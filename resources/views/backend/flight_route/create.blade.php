@extends('backend.layouts.app')

@section('title',trans('Create Flight Route'))
@section('page',trans('Create'))
@section('content')
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <form class="form" method="post" enctype="multipart/form-data" action="{{route('flight_route.store')}}">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="name" style="color: green;">Name</label>
                            <input type="string" id="name" class="form-control" value="{{ old('name')}}" name="name">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="departure_city" style="color: green;">Departure City</label>
                            <select id="departure_city" onchange="checkairport(this)" class="form-control" name="departure_city">
                                <option value="">Select City</option>
                                @forelse($city as $c)
                                    <option class="dc dc{{$c->id}}" value="{{$c->id}}" @if(old('departure_city')==$c->id) selected @endif>{{$c->name}}</option>
                                @empty
                                @endforelse
                            </select>
                            @if($errors->has('departure_city"'))
                                <span class="text-danger"> {{ $errors->first('departure_city"') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="arrival_city" style="color: green;">Arrival City</label>
                            <select id="arrival_city" class="form-control" onchange="checkairport(this)" name="arrival_city">
                                <option value="">Select City</option>
                                @forelse($city as $c)
                                    <option class="ac ac{{$c->id}}" value="{{$c->id}}" @if(old('arrival_city')==$c->id) selected @endif>{{$c->name}}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="departure_airport" style="color: green;">Departure Airport</label>
                            <select id="departure_airport" class="form-control" name="departure_airport">
                                <option value="">Select Airport</option>
                                @forelse($airport as $c)
                                    <option class="dcity dcity{{$c->city_id}}" value="{{$c->id}}" @if(old('departure_airport')==$c->id) selected @endif>{{$c->name}}</option>
                                @empty
                                @endforelse
                            </select>
                            @if($errors->has('departure_airport"'))
                                <span class="text-danger"> {{ $errors->first('departure_airport"') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="arrival_airport" style="color: green;">Arrival Airport</label>
                            <select id="arrival_airport" class="form-control" name="arrival_airport">
                                <option value="">Select Airport</option>
                                @forelse($airport as $c)
                                    <option class="acity acity{{$c->city_id}}" value="{{$c->id}}" @if(old('arrival_airport')==$c->id) selected @endif>{{$c->name}}</option>
                                @empty
                                @endforelse
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
@endsection

@push('scripts')
<script>
    function checkairport(e){
        let id=$(e).attr('id');
        let v=$(e).val();
        if(id=="arrival_city"){
            //$("#departure_city .dc").show();
            //$("#departure_city .dc"+v).hide();
            $('#arrival_airport .acity').hide();
            $('#arrival_airport .acity'+v).show();
        }else{
            $("#arrival_city .ac").show();
            $("#arrival_city .ac"+v).hide();
            $('#departure_airport .dcity').hide();
            $('#departure_airport .dcity'+v).show();
        }
    }
</script>
@endpush
