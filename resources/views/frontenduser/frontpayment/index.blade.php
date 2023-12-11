@extends('frontenduser.frontpayment')
@section('title',trans('payment'))
@section('page',trans('List'))
@section('content')
<style>
    .custom-text-color {
        color: green;
    }
</style>
<!-- Bordered table start -->
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">
            @if(session()->has('message'))
            {{session()->get('message')}}
            @endif
           <div>
        <div class="col-12">
            <div class="mb-3">
                <label for="searchCustomer" class="custom-text-color" style="font-size: 24px;">Payment</label>
            </div>
            <div class="card">
                <!-- table bordered -->
                <div class="table-responsive">
                    <div>
                        <button class="btn btn-primary pull-right fs-1" onclick="window.location.href='{{  route('frontpayment.create') }}'">
                            <i class="fa fa-plus"></i> Add Payment
                        </button>
                    </div>
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>{{__('#SL')}}</th>
                                <th>{{__('Booking Id')}}</th>
                                <th>{{__('Payment Method')}}</th>
                                <th>{{__('Total Amount')}}</th>
                                <th>{{__('Action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($frontpayment as $p)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$p->booking_id}}</td> 
                                <td>{{$p->amount}}</td>
                                <td>{{$p->payment_method?->name}}</td>
                                <td>{{$p->total_amount}}</td>
                                <td class="white-space-nowrap">
                                   <button class="btn btn-sm btn-primary" onclick="window.location.href='{{ route('frontpayment.edit',  $p->id) }}'">
                                        <i class="fa fa-edit"></i>
                                      </button>
                                       <form id="form{{$p->id}}" action="{{ route('frontpayment.destroy', $p->id) }}" method="post">
                                       @csrf
                                        @method('delete')

                                  <button type="submit" class="btn btn-sm btn-danger">
                                  <i class="fa fa-trash"></i>
                                  </button>
                                  </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No Data Found</th>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{$frontpayment->links()}}
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
