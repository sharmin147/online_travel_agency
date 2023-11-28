@extends('backend.layouts.app')
@section('pageHeading', 'Bookings List')
@section('content')
<div class="row">
    <div class="col-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="mb-3" style="color: green;">
            <h2>Booking List</h2>
        </div>
        <a href="{{ route('bookings.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add Bookings
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th style="color: green;font-size: 20px;">Id</th>
                    <th style="color: green;font-size: 20px;">Customer Id</th>
                    <th style="color: green;font-size: 20px;">Flight Id</th>
                    <th style="color: green;font-size: 20px;">Seat Id</th>
                    <th style="color: green;font-size: 20px;">Payment Status</th>
                    <th style="color: green;font-size: 20px;">Status</th>
                    <th style="color: green;font-size: 20px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($bookings as $b)
                    <tr>
                        <td>{{ $b->id }}</td>
                        <td>{{ $b->customer_id}}</td>
                        <td>{{ $b->flight_id}}</td>
                        <td>{{ $b->seat_id }}</td>
                        <td>{{ $b->payment_status }}</td>
                        <td>{{ $b->status ? 'Accept' : 'Pending' }}</td>
                        <td>
                            <a href="{{ route('bookings.edit', $b->id) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('bookings.destroy', $b->id) }}" method="post" style="display: inline;">
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
        {{ $bookings->links() }}
    </div>
</div>
@endsection

