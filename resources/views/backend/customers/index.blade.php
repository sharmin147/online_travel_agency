@extends('backend.layouts.app')
@section('pageHeading','Customer List')

@section('content')
    <div class="row">
        <div class="col-12">
         @if(session()->has('message'))
         {{session()->get('message')}}
         @endif
        <div>
               <div class="mb-3">
                <label for="searchCustomer" class="form-label" style="color: green;"><h2>Customers List</h2></label><br><br>
                </div>
                  <button class="btn btn-primary pull-right fs-1" onclick="window.location.href='{{  route('customers.create') }}'">
                  <i class="fa fa-plus"></i>Add Customers
                  </button>
                </div>
            <table class="table">
                <tr>
                    <th style="color: green;">ID</th>
                    <th style="color: green;">Customer Id</th>
                    <th style="color: green;">First Name</th>
                    <th style="color: green;">Last Name</th>
                    <th style="color: green;">Email</th>
                    <th style="color: green;">Action</th>
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
