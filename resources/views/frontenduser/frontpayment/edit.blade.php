@extends('frontenduser.frontpayment')
@section('title',trans('frontend Create'))
@section('page',trans('Create'))
@section('content')
<!-- <div class="card">
    <div class="card-content">
        <div class="card-body">
            <form class="form" method="post" enctype="multipart/form-data" action="{{route('user_payment.store')}}">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12">
                      <div class="form-group">
                      <label for="booking_id">Booking Id</label>
                      <input type="text" name="booking_id" value="{{ $frontpayment->booking_id }}" class="form-control">
                    </div> 
                   </div>
                </div>
                    <div class="row">
                    <div class="col-md-6 col-12">
                      <div class="form-group">
                      <label for="amount">Amount</label>
                      <input type="text" name="amount" value="{{ $frontpayment->amount }}" class="form-control">
                    </div> 
                   </div>
                </div>
                   <div class="row">
                    <div class="col-md-6 col-12">
                      <div class="form-group">
                       <label for="payment_method">Payment Method</label>
                         <select id="payment_method" class="form-control" name="payment_method">
                            <option value="">Select Method</option>
                                     @forelse($payment_method as $ap)
                                    <option value="{{$ap->id}}" @if(old('payment_method',$frontpayment->payment_method)==$ap->id) selected @endif>{{$ap->name}}</option>
                                     @empty
                                     @endforelse
                              </select>
                                  @if($errors->has('payment_methood"'))
                                <span class="text-danger"> {{ $errors->first('payment_method"') }}</span>
                            @endif
                      </div> 
                   </div>
                </div>
                  <div class="row">
                    <div class="col-md-6 col-12">
                      <div class="form-group">
                      <label for="total_amount">Total Amount</label>
                      <input type="text" name="total_amount" value="{{ $frontpayment->total_amount }}" class="form-control">
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
</div> -->
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <form class="form" method="post" enctype="multipart/form-data" action="{{ route('user_payment.update', $frontpayment->id) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="booking_id">Booking Id</label>
                            <input type="text" name="booking_id" value="{{ old('booking_id', $frontpayment->booking_id) }}" class="form-control">
                            @error('booking_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" name="amount" value="{{ old('amount', $frontpayment->amount) }}" class="form-control">
                            @error('amount')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="payment_method">Payment Method</label>
                            <select id="payment_method" class="form-control" name="payment_method">
                                <option value="">Select Method</option>
                                @forelse($payment_method as $ap)
                                    <option value="{{ $ap->id }}" {{ old('payment_method', $frontpayment->payment_method) == $ap->id ? 'selected' : '' }}>{{ $ap->name }}</option>
                                @empty
                                @endforelse
                            </select>
                            @error('payment_method')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="total_amount">Total Amount</label>
                            <input type="text" name="total_amount" value="{{ old('total_amount', $frontpayment->total_amount) }}" class="form-control">
                            @error('total_amount')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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
