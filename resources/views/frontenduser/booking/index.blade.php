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
                      <table class="table">
                        <tr>
                          <th>#SL</th>
                          <th>Flight</th>
                          <th>Seat Class</th>
                          <th>Booking Date</th>
                          <th>Travel Date</th>
                          <th>Seat Qty</th>
                          <th>Total Amount</th>
                          <th>Action</th>
                        </tr>
                        @forelse($bookings as $b)
                          <tr>
                            <th>{{$b->id}}</th>
                            <th>{{$b->flight?->flight_number}}</th>
                            <th>{{$b->sclass?->name}}</th>
                            <th>{{$b->booking_date}}</th>
                            <th>{{$b->flight?->departure_date}} to {{$b->flight?->arrival_date}}</th>
                            <th>{{$b->qty}}</th>
                            <th>{{$b->total_amount}}</th>
                            <th>
                              <a href="" class="btn btn-primary">Invoice</a>
                            </th>
                          </tr>
                        @empty

                        @endforelse
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
