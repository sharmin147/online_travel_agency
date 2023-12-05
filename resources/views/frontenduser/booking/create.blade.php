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
                                  <input type="text" class="form-control p-2" placeholder="Your name" required="required" id="name" name="name"  value="{{old('name')}}"/>
                                  @if($errors->has('name'))
                                    <small class="d-block text-danger">{{$errors->first('name')}}</small>
                                  @endif
                                </div>
                              </div>
                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                  <input type="text" class="form-control p-2" placeholder="Your name" required="required" id="name" name="name"  value="{{old('name')}}"/>
                                  @if($errors->has('name'))
                                    <small class="d-block text-danger">{{$errors->first('name')}}</small>
                                  @endif
                                </div>
                              </div>
                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                  <input type="text" class="form-control p-2" placeholder="Your name" required="required" id="name" name="name"  value="{{old('name')}}"/>
                                  @if($errors->has('name'))
                                    <small class="d-block text-danger">{{$errors->first('name')}}</small>
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
