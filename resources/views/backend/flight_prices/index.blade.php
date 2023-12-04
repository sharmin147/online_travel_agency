@extends('backend.layouts.app')
@section('pageHeading', 'Flight Price List')
@section('content')
<div class="row">
    <div class="col-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="mb-3" style="color: green;">
            <h2>Flight Price List</h2>
        </div>
        <a href="{{ route('flight_class.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add Price
        </a>
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th style="color: green;font-size: 20px;">ID</th>
                    <th style="color: green;font-size: 20px;">Flight Category Id</th>
                    <th style="color: green;font-size: 20px;">Flight Class Id</th>
                    <th style="color: green;font-size: 20px;">Flight Route Id</th>
                    <th style="color: green;font-size: 20px;">Price</th>
                    <th style="color: green;font-size: 20px;">Status</th>
                    <th style="color: green;font-size: 20px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($flight_price as $prices)
                    <tr class="text-center">
                        <td>{{ $prices->id }}</td>
                        <td>{{ $prices->flight_category_id}}</td>
                        <td>{{ $prices->flight_class_id }}</td>
                        <td>{{ $prices->flight_route_id }}</td>
                        <td>{{ $prices->price }}</td>
                        <td>{{ $prices->status ? 'Paid' : 'Pending' }}</td>
                        <td>
                            <a href="{{ route('flight_prices.edit', $prices->id) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('flight_prices.destroy', $prices->id) }}" method="post" style="display: inline;">
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
                        <td colspan="7">No Data Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $flight_prices->links() }}
    </div>
</div>
@endsection

