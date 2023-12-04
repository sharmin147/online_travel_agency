@extends('backend.layouts.app')
@section('pageHeading', 'Airplane Seat List')
@section('content')
<div class="row">
    <div class="col-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="mb-3" style="color: green;">
            <h2>Seat List</h2>
        </div>
        <a href="{{ route('airplane_seats.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add Seat
        </a>
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th style="color: green;font-size: 20px;">Id</th>
                    <th style="color: green;font-size: 20px;">Airplane Id</th>
                    <th style="color: green;font-size: 20px;">Quantity</th>
                    <th style="color: green;font-size: 20px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($airplane_seats as $seat)
                    <tr>
                        <td>{{ $seat->id }}</td>
                        <td>{{ $seat->airplane_id}}</td>
                        <td>{{ $seat->quantity }}</td>
                      
                        <td>
                            <a href="{{ route('airplane_seats.edit', $airplane_seat->id) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('airplane_seats.destroy', $seat->id) }}" method="post" style="display: inline;">
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
        {{ $airplane_seats->links() }}
    </div>
</div>
@endsection

