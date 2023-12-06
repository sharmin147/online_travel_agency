@extends('frontenduser.layout.app')
@section('title','Booking')
@section('content')
<div class="container-fluid bg-registration">
    <div class="container py-2">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="card border-0">
                    <div class="card-header bg-primary text-center">
                        <h5 class="text-white m-0">Flight Booking</h5>
                    </div>
                    <div class="card-body rounded-bottom bg-white p-2">
                       <form action="{{ route('user-booking.store') }}" method="POST">
                            @csrf
                            <div class="row">
                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                  <label for="from">From</label>
                                    <select class="form-control p-2" id="from" name="from" required="required">
                                      <option value="">Select City</option>
                                      @forelse($city as $c)
                                          <option class="ac ac{{$c->id}}" value="{{$c->id}}" @if(old('arrival_city')==$c->id) selected @endif>{{$c->name}}</option>
                                      @empty
                                      @endforelse
                                    </select>
                                     @if($errors->has('from'))
                                       <small class="d-block text-danger">{{$errors->first('from')}}</small>
                                      @endif
                                  </div>
                              </div>
                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                  <label for="to">To</label>
                                    <select class="form-control p-2" id="to" name="to" required="required">
                                      <option value="">Select City</option>
                                      @forelse($city as $c)
                                          <option class="ac ac{{$c->id}}" value="{{$c->id}}" @if(old('arrival_city')==$c->id) selected @endif>{{$c->name}}</option>
                                      @empty
                                      @endforelse
                                    </select>
                                     @if($errors->has('from'))
                                       <small class="d-block text-danger">{{$errors->first('from')}}</small>
                                      @endif
                                  </div>
                              </div>
                              
                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                  <label for="to">Travel Date</label>
                                  <input type="date" class="form-control p-2" placeholder="travel date" required="required" id="travel_date" name="travel_date"  value="{{old('travel_date')}}"/>
                                  @if($errors->has('travel_date'))
                                    <small class="d-block text-danger">{{$errors->first('travel_date')}}</small>
                                  @endif
                                </div>
                              </div>
                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                  <label for="is_direct_flight">Is direct flight</label>
                                  <select id="is_direct_flight" class="form-control p-2" name="is_direct_flight">
                                      <option value="1" @if(old('is_direct_flight')==1) selected @endif>Yes</option>
                                      <option value="0" @if(old('is_direct_flight')==0) selected @endif>No</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-4 col-12">
                                <div class="form-group pt-1">
                                  <a href="javascript:void(0)" class="btn btn-primary mt-4" onclick="getFlight()">Get Flight</a>
                                </div>
                              </div>
                            </div>
                            <hr>
                            <div class="row no-flight_data" style="display:none">
                              <div class="col-12">
                                <h3 class="text-center">No flight data found under this requirment</h3>
                              </div>
                            </div>
                            <div class="row flight_data" style="display:none">
                              <div class="col-sm-3 col-12">
                                <div class="form-group">
                                  <label for="to">Flight</label>
                                    <select class="form-control p-2" id="flight_id" name="flight_id" required="required">
                                      <option value="">Select Flight</option>
                                    </select>
                                  </div>
                              </div>
                              <div class="col-sm-3 col-12">
                                <div class="form-group">
                                  <label for="flight_class_id">Seat Class</label>
                                  <select class="form-control p-2" id="flight_class_id" name="flight_class_id" required="required">
                                    <option value="">Select Class</option>
                                    @forelse($fclass as $c)
                                      <option class="ac ac{{$c->id}}" value="{{$c->id}}" @if(old('flight_class_id')==$c->id) selected @endif>{{$c->name}}</option>
                                    @empty
                                    @endforelse
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-3 col-12">
                                <div class="form-group">
                                  <label for="flight_category_id">Flight Category</label>
                                  <select class="form-control p-2" id="flight_category_id" name="flight_category_id" required="required">
                                    <option value="">Select Category</option>
                                    @forelse($fcategory as $c)
                                      <option class="ac ac{{$c->id}}" value="{{$c->id}}" @if(old('flight_category_id')==$c->id) selected @endif>
                                        {{$c->name}} -Bag:{{$c->baggage_allowance}} -Refundable:{{$c->refundable?"yes":"no"}}
                                      </option>
                                    @empty
                                    @endforelse
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-3 col-12">
                                <div class="form-group pt-1">
                                  <a href="javascript:void(0)" class="btn btn-primary mt-4" onclick="checkSeat()">Check Seat</a>
                                </div>
                              </div>
                            </div>

                            <div class="row no-seat_data" style="display:none">
                              <div class="col-12">
                                <h3 class="text-center">No seat available under this class</h3>
                              </div>
                            </div>
                            <div class="row seat_data" style="display:none">
                              <div class="col-sm-6">
                                <div class="row">
                                  <div class="col-12">
                                    <div class="form-group">
                                      <label for="qty">Seat Quantity</label>
                                      <input type="text" class="form-control" name="seat_qty" id="seat_qty" onkeyup="checkqty(this)">
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                      <label for="qty">Pay Amount</label>
                                      <input type="text" class="form-control" name="amount" id="amount">
                                      <input type="hidden" name="seat_price" id="seat_price">
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                      <label for="qty">Transaction ID</label>
                                      <input type="text" class="form-control" name="transaction_id" id="transaction_id">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="row">
                                  <div class="col-12">
                                    <div class="form-group">
                                      <label for="flight_category_id">Available Seat: <span class="available_seat"></span></label><br>
                                      <label for="seat_price">Price Per Seat: <span class="seat_price"></span></label><br>
                                      <label for="seat_price">Sub Amount: <span class="sub_amount"></span></label><br>
                                      <label for="seat_price">Vat: <span class="vat"></span></label><br>
                                      <label for="flight_category_id" style="border-top:3px double green">Total Amount: <span class="total_seat_price"></span></label><br>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                            <div>
                              <button class="btn btn-primary btn-block py-3" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
  /* global variable */
  var available_seat=0;
  var seat_price=0;

  function getFlight(){
    let from=$('#from').val();
    let to=$('#to').val();
    let is_direct_flight=$('#is_direct_flight').val();
    let travel_date=$('#travel_date').val();
    $.ajax({
        autoFocus:true,
        url: "{{route('flight_search')}}",
        method: 'GET',
        dataType: 'json',
        data: {from: from,to:to,is_direct_flight:is_direct_flight,travel_date:travel_date},
        success: function(res){
          if(res){
            $('.flight_data').show()
            $('.no-flight_data').hide();
            $('#flight_id').html(res);
          }else{
            $('.flight_data').hide();
            $('.no-flight_data').show();
          }
        },error: function(e){console.log(e);}
    });
  }

  function checkSeat(){
    let flight_id=$('#flight_id').val();
    let flight_class_id=$('#flight_class_id').val();
    let flight_category_id=$('#flight_category_id').val();
    $.ajax({
        autoFocus:true,
        url: "{{route('flight_seat_search')}}",
        method: 'GET',
        dataType: 'json',
        data: {flight_id: flight_id,flight_category_id:flight_category_id,flight_class_id:flight_class_id},
        success: function(res){
          if(res){
            $('.seat_data').show()
            $('.no-seat_data').hide();
            $('.available_seat').html(res.available);
            $('.seat_price').html(res.price);
            $('#seat_price').val(res.price);

            available_seat=res.available;
            seat_price=res.price;

          }else{
            $('.seat_data').hide();
            $('.no-seat_data').show();
          }
        },error: function(e){console.log(e);}
    });
  }

  function checkqty(e){
    var seat_qty=$(e).val();
    if(parseFloat(seat_qty) > parseFloat(available_seat)){
      alert('You cannot buy more than '+available_seat);
      $(e).val(available_seat);
    }
    var amount=seat_price * $(e).val();
    var vat=(amount*0.15);
    $('.vat').html(vat);
    $('.sub_amount').html(amount);
    $('.total_seat_price').html(amount + vat);
  }
</script>

@endpush