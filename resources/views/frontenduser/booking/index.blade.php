@extends('frontenduser.layout.app')
@section('title','Booking invoice')
@section('content')
<div class="container-fluid bg-registration">
    <div class="container py-2">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="card border-0">
                      <div class="card-header bg-primary text-center">
                  <h1 class="text-white m-0">Booking Summary</h1>
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
<style>
.height {
    min-height: 200px;
}

.icon {
    font-size: 40px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
    width:600px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center">
                <i class="fa fa-search-plus pull-left icon"></i>
                <h2>Invoice for Booking #33221</h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-3 col-lg-3 pull-left">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Billing Details</div>
                        <div class="panel-body">
                            <strong>David Peere:</strong><br>
                            1111 Army Navy Drive<br>
                            Arlington<br>
                            VA<br>
                            <strong>22 203</strong><br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Payment Information</div>
                        <div class="panel-body">
                            <strong>Card Name:</strong> Visa<br>
                            <strong>Card Number:</strong> ***** 332<br>
                            <strong>Exp Date:</strong> 09/2020<br>
                        </div>
                    </div>
                </div>
                 <div class="col-xs-12 col-md-3 col-lg-3">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Order Preferences</div>
                        <div class="panel-body">
                            <strong>Gift:</strong> No<br>
                            <strong>Express Delivery:</strong> Yes<br>
                            <strong>Insurance:</strong> No<br>
                            <strong>Coupon:</strong> No<br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3 pull-right">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Address</div>
                        <div class="panel-body">
                            <strong>David Peere:</strong><br>
                            1111 Army Navy Drive<br>
                            Arlington<br>
                            VA<br>
                            <strong>22 203</strong><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
               <div class="panel-heading">
                    <h3 class="text-center"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>#SL</strong></td>
                            
                                    <td class="text-center"><strong>Flight</strong></td>
                                    <td class="text-center"><strong>Booking Date</strong></td>
                                    <td class="text-center"><strong>Travel Date</strong></td>
                                      <td class="text-center"><strong>Seat Qty</strong></td>
                                    <!-- <td class="text-right"><strong>Total Amount</strong></td> -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                   <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-right"></td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-right"></td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-right"></td>
                                </tr>
                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-center"><strong>Subtotal</strong></td>
                                    <td class="highrow text-right"></td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Vat</strong></td>
                                    <td class="emptyrow text-right"></td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"><i class="fa fa-barcode iconbig"></i></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Total</strong></td>
                                    <td class="emptyrow text-right"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
