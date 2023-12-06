
@extends('frontenduser.layout.app')
@section('content')

<!-- Destination Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Dashboard</h6>
            <h1>Explore Booking</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <!-- <img class="img-fluid" src="{{asset('public/frontend/img/destination-6.jpg')}}" alt=""> -->
                    <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">United States</h5>
                        <span>100 Cities</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <!-- <img class="img-fluid" src="{{asset('public/frontend/img/destination-2.jpg')}}" alt=""> -->
                    <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">United Kingdom</h5>
                        <span>100 Cities</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <!-- <img class="img-fluid" src="{{asset('public/frontend/img/destination-4.jpg')}}" alt=""> -->
                    <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">Australia</h5>
                        <span>100 Cities</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <!-- <img class="img-fluid" src="{{asset('public/frontend/img/destination-5.jpg')}}" alt=""> -->
                    <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">India</h5>
                        <span>100 Cities</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <!-- <img class="img-fluid" src="{{asset('public/frontend/img/destination-3.jpg')}}" alt=""> -->
                    <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">South Africa</h5>
                        <span>100 Cities</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <!-- <img class="img-fluid" src="{{asset('public/frontend/img/destination-6.jpg')}}" alt=""> -->
                    <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">Indonesia</h5>
                        <span>100 Cities</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Destination Start -->



<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


@endsection
