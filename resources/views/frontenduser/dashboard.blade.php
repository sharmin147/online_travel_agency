@extends('frontenduser.layout.app')
@section('content')

<style>
    .card-img-top {
        height: 250px; 
        object-fit: cover;
    }
</style>

<!-- Destination Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Dashboard</h6>
            <h1>Explore The Journey</h1>
        </div>

        <!-- Booking Type Cards -->
        <div class="row">
            <!-- Flights -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('public/frontend/img/istockphoto-1446029557-612x612.jpg')}}" alt="Flights Image">
                    <div class="card-body">
                        <h5 class="card-title">Flights</h5>
                        <p class="card-text">Find and book flights to your destination.</p>
                        <a href="#" class="btn btn-primary">Explore Flights</a>
                    </div>
                </div>
            </div>

            <!-- Hotels -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('public/frontend/img/istockphoto-854964648-612x612.jpg')}}" alt="Hotels Image">
                    <div class="card-body">
                        <h5 class="card-title">Tours</h5>
                        <p class="card-text">Discover comfortable stays for your trip.</p>
                        <a href="#" class="btn btn-primary">Explore Tours</a>
                    </div>
                </div>
            </div>

            <!-- Tours -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('public/frontend/img/plane2.jpg')}}" alt="Tours Image">
                    <div class="card-body">
                        <h5 class="card-title">Booking</h5>
                        <p class="card-text">Explore exciting tours and activities and trip.</p>
                        <a href="#" class="btn btn-primary">Explore Bookings</a>
                    </div>
                </div>
            </div>
            <!-- Add more cards for additional booking types -->
        </div>
    </div>
</div>
<!-- Additional sections for bookings, user information, etc. could be added here -->
@endsection


