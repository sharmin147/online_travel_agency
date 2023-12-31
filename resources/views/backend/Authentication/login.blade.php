@extends('backend.layouts.appAuth')
@section('title','Sign in')
@section('content')
	<div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-2 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form action="{{route('login.check')}}" method="POST">
                  @csrf
                  	<div class="form-group">
												<label class="control-label mb-10" for="username">Contact Number / Email Address</label>
												<input type="text" class="form-control" required="" id="username" name="username" value="{{old('username')}}" placeholder="Phone Number/Email Address">
												@if($errors->has('username'))
													<small class="d-block text-danger">
														{{$errors->first('username')}}
													</small>
												@endif
											</div>
                  <div class="form-group">
                 <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
                    <input type="password" class="form-control" required="" id="password" name="password" placeholder="Enter pwd">
												@if($errors->has('password'))
													<small class="d-block text-danger">
														{{$errors->first('password')}}
													</small>
												@endif
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                   <p class="sign-up">Don't have an Account?<a href="{{route('register')}}"> Sign Up</a></p>
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>
      <!-- page-body-wrapper ends -->
    </div>
@endsection
