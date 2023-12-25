@extends('frontenduser.layout.app')
@section('content')


<div class="dashboard">
   <main class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-md-6 bg-secondary text-dark p-4">
        
                <h3>Agency Information</h3>
                <p>Total Customers: 500</p>
                <p>Popular Destinations: Rome, Tokyo, New York</p>
             </div>
            <div class="col-md-3">
                <div class="card h-100 bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Statistics</h5>
                        <div class="card-text">
                            <p>Total Bookings:1000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Recent Bookings</h5>
                        <div class="card-text">
                            <p>Booking #123 - Destination: Paris - Date: 2023-12-10</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> 
    </div>
@endsection




