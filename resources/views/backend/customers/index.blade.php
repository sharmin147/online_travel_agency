@extends('backend.layouts.app')
@section('pageHeading','Customer List')

@section('content')
    <div class="row">
        <div class="col-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
             @endif
               <div class="mb-3" style="color: green;">
                   <h2>Customer List</h2>
               </div>
               <a href="{{ route('customers.create') }}" class="btn btn-primary">
                  <i class="fa fa-plus"></i> Add Bookings
              </a>

            <table class="table">
                <tr>
                    <th style="color: green;font-size: 20px;">ID</th>
                    <th style="color: green;font-size: 20px;">Customer Id</th>
                    <th style="color: green;font-size: 20px;">First Name</th>
                    <th style="color: green;font-size: 20px;">Last Name</th>
                    <th style="color: green;font-size: 20px;">Email</th>
                    <th style="color: green;font-size: 20px;">Action</th>
                </tr>
                        @forelse($customers as $s)
                    <tr>
                        <td>{{$s->id}}</td>
                        <td>{{$s->customer_id}}</td>
                        <td>{{$s->first_name}}</td>
                        <td>{{$s->last_name}}</td>
                        <td>{{$s->email}}</td>
                        <td>
                        <a href="{{ route('customers.edit', $s->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('customers.destroy', $s->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </form>
                       </td>
                    </tr>
                      @empty
                    <tr>
                        <td colspan="5">No Data Found</td>
                    </tr>
                @endforelse
            </table>
            {{$customers->links()}}
        </div>
    </div>

    @endsection
