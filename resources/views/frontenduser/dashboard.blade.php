@extends('frontenduser.layout.app')
@section('content')

<div class="wrapper d-flex align-items-stretch">
   <nav id="sidebar" style="width: 200px; height: 500px;"> <!-- Set the width as desired -->
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
        </div>
        <h1><a href="index.html" class="logo">OTA</a></h1>
        <ul class="list-unstyled components mb-5">
            <li class="active">
                <a href="{{ url('/') }}"><span class="fa fa-home mr-3"></span> Homepage</a>
            </li>
            <li>
                <a href="{{ route('user.dashboard') }}"><span class="fa fa-user mr-3"></span> Dashboard</a>
            </li>
            <li>
                <a href="{{ route('user-booking.index') }}"><span class="fa fa-sticky-note mr-3"></span>Your Booking</a>
            </li>
            <li>
                <a href="{{ route('user-booking.create') }}"><span class="fa fa-calendar-plus-o mr-3"></span>Book Now</a>
            </li>
            <li>
                <a href="#"><span class="fa fa-shopping-cart mr-3"></span> My Order</a>
            </li>
            <li>
                <a href="#"><span class="fa fa-info-circle mr-3"></span> Information</a>
            </li>
        </ul>
    </nav>
</div>
 
@endsection




