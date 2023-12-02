

@extends('frontenduser.layout.appAuth') 
@section('title','Sign Up')
@section('content')
<div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Mega Offer</h6>
                    <h1 class="text-white"><span class="text-primary">30% OFF</span> For Tour</h1>
                </div>
                <p class="text-white">Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                    ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                    dolor</p>
                <ul class="list-inline text-white m-0">
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Labore eos amet dolor amet diam</li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum</li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Diam dolor diam elitripsum vero.</li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="card border-0">
                    <div class="card-header bg-primary text-center p-4">
                        <h1 class="text-white m-0">Sign Up Now</h1>
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
                                  @if($errors->has('email'))
                                    <small class="d-block text-danger">
                                 {{$errors->first('email')}}
                                 </small>
                               @endif
                            </div>
                              <div class="form-group">
                                <input type="text" class="form-control p-4" placeholder="confirm password" required="" id="password_confirmation" name="password_confirmation"/>
                                  @if($errors->has('password'))
                                    <small class="d-block text-danger">
                                 {{$errors->first('password')}}
                                 </small>
                               @endif
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
