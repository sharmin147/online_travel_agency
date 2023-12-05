@extends('frontenduser.layout.app')
@section('title','Sign Up')
@section('content')
<div class="container-fluid bg-registration">
    <div class="container py-2">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="card border-0">
                    <div class="card-header bg-primary text-center">
                        <h5 class="text-white m-0">Flight Booking</h5>
                    </div>
                    <div class="card-body rounded-bottom bg-white p-2">
                       <form action="{{ route('frontenduser.auth.register.store') }}" method="POST">
                            @csrf
                            <div class="row">
                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <select class="form-control p-2" id="from" name="from" required="required">
                                    <option value="">From</option>
                                    <option value="1" {{ old('from') == '1' ? 'selected' : '' }}>Option 1</option>
                                    <option value="2" {{ old('from') == '2' ? 'selected' : '' }}>Option 2</option>
                                    </select>
                                     @if($errors->has('from'))
                                       <small class="d-block text-danger">{{$errors->first('from')}}</small>
                                      @endif
                                  </div>
                              </div>
                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <select class="form-control p-2" id="to" name="to" required="required">
                                    <option value="">To</option>
                                    <option value="1" {{ old('to') == '1' ? 'selected' : '' }}>Option 1</option>
                                    <option value="2" {{ old('to') == '2' ? 'selected' : '' }}>Option 2</option>
                                    </select>
                                     @if($errors->has('to'))
                                       <small class="d-block text-danger">{{$errors->first('to')}}</small>
                                      @endif
                                  </div>
                              </div>
                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                  <input type="date" class="form-control p-2" placeholder="travel date" required="required" id="travel_date" name="travel_date"  value="{{old('travel_date')}}"/>
                                  @if($errors->has('travel_date'))
                                    <small class="d-block text-danger">{{$errors->first('travel_date')}}</small>
                                  @endif
                                </div>
                              </div>
                            </div>
                            <div>
                              <button class="btn btn-primary btn-block py-3" type="submit">Sign Up Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
