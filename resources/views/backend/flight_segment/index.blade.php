@extends('backend.layouts.app')
@section('title',trans('Segment'))
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
                <label for="searchCustomer" class="custom-text-color" style="font-size: 24px;">Segment List</label>
                </div>
                 <div class="card">
                <!-- table bordered -->
                <div class="table-responsive">
                 <div>
                  <button class="btn btn-primary pull-right fs-1" onclick="window.location.href='{{  route('flight_segment.create') }}'">
                  <i class="fa fa-plus"></i> Add Segment
                  </button>
                  </div>
                  <br><br>


                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col" style="color: green;">{{__('#SL')}}</th>
                                <th scope="col" style="color: green;">{{__('Id')}}</th>
                                <th scope="col" style="color: green;">{{__('Flight Num')}}</th>
                                <th scope="col" style="color: green;">{{__('Departure C')}}</th>
                                <th scope="col" style="color: green;">{{__('Arrival C')}}</th>
                                <th scope="col" style="color: green;">{{__('Departure D')}}</th>
                                <th scope="col" style="color: green;">{{__('Arrival D')}}</th>
                                <th scope="col" style="color: green;">{{__('Is direct Flight')}}</th>
                                <th scope="col" style="color: green;">{{__('Connecion Airport')}}</th>
                                <th scope="col" style="color: green;">{{__('Connection Duration')}}</th>
                                <th scope="col" style="color: green;">{{__('Price')}}</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse($flight_segment as $p)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$p->flight_number}}</td>
                                <td>{{$p->departure_city}}</td>
                                <td>{{$p->arrival_city}}</td>
                                <td>{{$p->departure_date}}</td>
                                <td>{{$p->arrival_date}}</td>
                               <td>@if($p->is_direct_flight == 1) {{__('Yes') }} @else {{__('No') }} @endif</td>
                               <td>{{$p->connection_airport}}</td>
                               <td>{{$p->connection_duration}}</td>
                               <td>{{$p->price}}</td>

                                <td class="white-space-nowrap">
                                   <button class="btn btn-sm btn-primary" onclick="window.location.href='{{ route('flight_segment.edit', encryptor('encrypt', $p->id)) }}'">
                                        <i class="fa fa-edit"></i>
                                      </button>
                                       <form id="form{{$p->id}}" action="{{ route('flight_segment.destroy', encryptor('encrypt', $p->id)) }}" method="post">
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
                    {{$flight_segment->links()}}
                </div>
            </div>
        </div>
    </div>
</section>

 {{-- <script>
    function deleteUser(userId) {
        if (confirm("Are you sure you want to delete this user?")) {
            event.preventDefault();
            document.getElementById('delete-form-' + userId).submit();
        }
    }
</script> --}}
@endsection
