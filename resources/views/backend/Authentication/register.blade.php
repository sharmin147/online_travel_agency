@extends('backend.layouts.appAuth')
@section('title','Sign Up')
@section('content')
   <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-2 py-5">
                <h3 class="card-title text-left mb-3">Register</h3>
                	<form action="{{route('register.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label class="control-label mb-10" for="FullName">Full Name</label>
                      <input type="text" class="form-control" required="" id="FullName" name="FullName" value="{{old('FullName')}}" placeholder="Full Name">
                      @if($errors->has('FullName'))
                        <small class="d-block text-danger">
                          {{$errors->first('FullName')}}
                        </small>
                      @endif
                    </div>
                 	  <div class="form-group">
                      <label class="control-label mb-10" for="contact_no_en">Contact Number</label>
                      <input type="text" class="form-control" required="" id="contact_no_en" name="contact_no_en" value="{{old('contact_no_en')}}" placeholder="Phone Number">
                      @if($errors->has('contact_no_en'))
                        <small class="d-block text-danger">
                          {{$errors->first('contact_no_en')}}
                        </small>
                      @endif
                    </div>
                    <div class="form-group">
                      <label class="control-label mb-10" for="EmailAddress">Email address</label>
                      <input type="email" class="form-control" required="" id="EmailAddress" name="EmailAddress" value="{{old('EmailAddress')}}" placeholder="Enter email">
                      @if($errors->has('EmailAddress'))
                        <small class="d-block text-danger">
                          {{$errors->first('EmailAddress')}}
                        </small>
                      @endif
                    </div>
                     <div class="form-group">
                        <label class="pull-left control-label mb-10" for="password">Password</label>
                        <input type="password" class="form-control" required="" id="password" name="password" placeholder="Enter pwd">
                        @if($errors->has('password'))
                          <small class="d-block text-danger">
                            {{$errors->first('password')}}
                          </small>
                        @endif
                      </div>

                     <div class="form-group">
                        <label class="pull-left control-label mb-10" for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" required="" id="password_confirmation" name="password_confirmation" placeholder="Enter pwd again">
                        @if($errors->has('password'))
                          <small class="d-block text-danger">
                            {{$errors->first('password')}}
                          </small>
                        @endif
                      </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>

                  </div>

                  <p class="sign-up text-center">Already have an Account?<a href="#"> Sign Up</a></p>
                  <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
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

