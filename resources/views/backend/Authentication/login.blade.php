@extends('backend.layouts.appAuth')

@section('content')
	<div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
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
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up">Don't have an Account?<a href="{{route('register')}}"> Sign Up</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
@endsection
