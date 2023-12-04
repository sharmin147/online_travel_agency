@extends('backend.layouts.app')
@section('title',trans('Route'))
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
                <label for="searchCustomer" class="custom-text-color" style="font-size: 24px;">Route List</label>
                </div>
                 <div class="card">
                <!-- table bordered -->
                <div class="table-responsive">
                 <div>
                  <button class="btn btn-primary pull-right fs-1" onclick="window.location.href='{{  route('flight_route.create') }}'">
                  <i class="fa fa-plus"></i> Add Route
                  </button>
                  </div>
                  <br><table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col" style="color: green;">{{__('#SL')}}</th>
                                <th scope="col" style="color: green;">{{__('Name')}}</th>
                                <th scope="col" style="color: green;">{{__('Departure City')}}</th>
                                <th scope="col" style="color: green;">{{__('Arrival City')}}</th>
                                <th scope="col" style="color: green;">{{__('Departure Airport')}}</th>
                                <th scope="col" style="color: green;">{{__('Arrival Airport')}}</th>
                                <th scope="col" style="color: green;">{{__('Action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($flight_route as $p)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$p->name}}</td>
                                <td>{{$p->dep_city?->name}}</td>
                                <td>{{$p->ari_city?->name}}</td>
                                <td>{{$p->dep_airport?->name}}</td>
                                <td>{{$p->ari_airport?->name}}</td>
                                <td class="white-space-nowrap">
                                   <button class="btn btn-sm btn-primary" onclick="window.location.href='{{ route('flight_route.edit', $p->id) }}'">
                                        <i class="fa fa-edit"></i>
                                      </button>
                                       <form id="form{{$p->id}}" action="{{ route('flight_segment.destroy', $p->id) }}" method="post">
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
                    {{$flight_route->links()}}
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
