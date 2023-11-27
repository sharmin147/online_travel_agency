@extends('backend.layouts.app')
@section('pageHeading','Add New Customer')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{route('customers.update',$customers->id)}}" method="post">
                @csrf
                @method('PATCH')
                 <div class="form-group">
                    <label for="">Customer Id</label>
                    <input type="text" name="customer_id" value="{{$customers->customer_id}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" name="first_name" value="{{$customers->first_name}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" name="last_name" value="{{$customers->last_name}}" class="form-control">
                </div>


              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{ $customers->email }}" id="email" class="form-control">
             </div>

                  <div class="form-group">
           <label for="action">Status</label>
           <select name="status" id="status" class="form-control">
            <option value="accept" {{ $customers->status == "accept" ? "selected" : "" }}>Accept</option>
           <option value="Pending" {{ $customers->status == "Pendiing" ? "selected" : "" }}>Pending</option>
          </div>
        </select>

              <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection
