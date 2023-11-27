@extends('backend.layouts.app')
@section('pageHeading','Add New Customers')
@section('content')
    <div class="row">
        <div class="col-sm-12">


             <form action="{{route('customers.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="" style="color: green;">Customer Id</label>
                    <input type="text" name="customer_id" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" style="color: green;">First Name</label>
                    <input type="text" name="first_name" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" style="color: green;">Last Name</label>
                    <input type="text" name="last_name" id="" class="form-control">
                </div>


                <div class="form-group">
                    <label for="phone" style="color: green;">Email</label>
                    <input type="text" name="email" id="" class="form-control">
                </div>

                  <!-- <div class="form-group">
                    <label for=""style="color: green;">Action</label>
                    <select name="action" id="" class="form-control">
                        <option value="edit"></option>
                        <option value="delete"></option>
                        <option value="view"></option>
                    </select>
                </div> -->
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection
