@extends('backend.layouts.app')
@section('title',trans('User'))
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
                <label for="searchCustomer" class="custom-text-color" style="font-size: 24px;">User List</label>
                </div>
                 <div class="card">
                <!-- table bordered -->
                <div class="table-responsive">
                 <div>
                  <button class="btn btn-primary pull-right fs-1" onclick="window.location.href='{{  route('user.create') }}'">
                  <i class="fa fa-plus"></i> Add user
                  </button>
                  </div>
                  <br><br>


                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col" style="color: green;">{{__('#SL')}}</th>
                                <th scope="col" style="color: green;">{{__('Name')}}</th>
                                <th scope="col" style="color: green;">{{__('Email')}}</th>
                                <th scope="col" style="color: green;">{{__('Contact')}}</th>
                                <th scope="col" style="color: green;">{{__('Role')}}</th>
                                <th scope="col" style="color: green;">{{__('Image')}}</th>
                                <th scope="col" style="color: green;">{{__('Status')}}</th>
                                <th class="white-space-nowrap" style="color: green;">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $p)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$p->name_en}}</td>
                                <td>{{$p->email}}</td>
                                <td>{{$p->contact_no_en}}</td>
                                <td>{{$p->role?->identity}}</td>
                                <!-- <td><img width="60px" src="{{asset('public/uploads/users/'.$p->image)}}" alt=""></td> -->
                                <td><img src="{{ asset('public/uploads/users/'.$p->image) }}" alt="" style="width: 80px;"></td>

                                <td>@if($p->status == 1) {{__('Active') }} @else {{__('Inactive') }} @endif</td>
                                <!-- or <td>{{ $p->status == 1?"Active":"Inactive" }}</td>-->
                                <td class="white-space-nowrap">
                                   <button class="btn btn-sm btn-primary" onclick="window.location.href='{{ route('user.edit', encryptor('encrypt', $p->id)) }}'">
                                        <i class="fa fa-edit"></i>
                                      </button>
                                       <form id="form{{$p->id}}" action="{{ route('user.destroy', encryptor('encrypt', $p->id)) }}" method="post">
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
                    {{$data->links()}}
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
