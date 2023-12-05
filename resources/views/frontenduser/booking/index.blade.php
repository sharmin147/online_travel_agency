@extends('frontenduser.layout.app')
@section('title','Sign Up')
@section('content')
<div class="container-fluid bg-registration">
    <div class="container py-2">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="card border-0">
                    <div class="card-header bg-primary text-center">
                        <h1 class="text-white m-0">Booking</h1>
                    </div>
                    <div class="card-body rounded-bottom bg-white p-5">
                       <form action="{{ route('frontenduser.auth.register.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control p-4" placeholder="Your name" required="required" id="name" name="name"  value="{{old('name')}}"/>
                                  @if($errors->has('name'))
                                    <small class="d-block text-danger">
                                 {{$errors->first('name')}}
                                 </small>
                               @endif
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control p-4" placeholder="Your contact" required="required" id="contact" name="contact"  value="{{old('contact')}}"/>
                                  @if($errors->has('contact'))
                                    <small class="d-block text-danger">
                                 {{$errors->first('contact')}}
                                 </small>
                               @endif
                            </div>
                             <div class="form-group">
                                <input type="text" class="form-control p-4" placeholder="Your email" required="required" id="email" name="email"  value="{{old('email')}}"/>
                                  @if($errors->has('email'))
                                    <small class="d-block text-danger">
                                 {{$errors->first('email')}}
                                 </small>
                               @endif
                            </div>
                             <div class="form-group">
                                <input type="text" class="form-control p-4" placeholder="Your password" required="required" id="password" name="password"  value="{{old('password')}}"/>
                                  @if($errors->has('password'))
                                    <small class="d-block text-danger">
                                 {{$errors->first('password')}}
                                 </small>
                               @endif
                            </div>
                              <div class="form-group">
                                <input type="text" class="form-control p-4" placeholder="confirm password" required="" id="password_confirmation" name="password_confirmation"/>
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
