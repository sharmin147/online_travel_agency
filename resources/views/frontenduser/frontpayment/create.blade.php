@extends('frontenduser.frontpayment')
@section('title',trans('frontend Create'))
@section('page',trans('Create'))
@section('content')
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <form class="form" method="post" enctype="multipart/form-data" action="{{route('user-payment.store')}}">
                @csrf
                <div class="row">
                   <div class="col-md-6 col-12">
                     <div class="form-group">
                            <label for="booking_id" style="color: green;">Booking_id</label>
                            <select id="booking_id" class="form-control" name="booking_id">
                                <option value="">Booking id</option>
                                @forelse($flightRoute as $c)
                                    <option class="ac ac{{$c->id}}" value="{{$c->id}}" @if(old('Booking_id')==$c->id) selected @endif>{{$c->name}}</option>
                                @empty
                                @endforelse
                            </select>
                         </div>
                     </div> 
                   </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                  <label for="amount">Amount</label>
                                  <input type="text" class="form-control p-2" placeholder="amount" required="required" id="amount" name="amount"  value="{{old('amount')}}"/>
                                  @if($errors->has('amount'))
                                    <small class="d-block text-danger">{{$errors->first('amount')}}</small>
                                  @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                          <div class="form-group">
                            <label for="payment_method" style="color: green;">Payment Method</label>
                            <select id="payment_method" class="form-control" name="is_direct_flight">
                                <option value="1" @if(old('payment_method')==1) selected @endif>Mobile Banking</option>
                                <option value="0" @if(old('payment_method')==0) selected @endif>Cash</option>
                            </select>
                          </div>
                     </div>
                     <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="total_amount" style="color: green;">Total Amount</label>
                            <select id="total_amouont" class="form-control" name="total_amount">
                                <option value="">Total Amount</option>
                                @forelse($airport as $c)
                                    <option value="{{$c->id}}" @if(old('total_amount')==$c->id) selected @endif>{{$c->name}}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                 </div>

                 <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                    </div>
                  </div>
            </form>
        </div>
    </div>
</div>
@endsection


