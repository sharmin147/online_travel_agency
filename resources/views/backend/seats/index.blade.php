@extends('backend.layouts.app')
@section('pageHeading', 'Seat List')
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
        <a href="{{ route('seats.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add Seat
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th style="color: green; font-size: 16px">Id</th>
                    <th style="color: green; font-size: 16px">Flight Id</th>
                    <th style="color: green; font-size: 16px">Category Id</th>
                    <th style="color: green; font-size: 16px">Class Id</th>
                    <th style="color: green; font-size: 16px">Status</th>
                    <th style="color: green; font-size: 16px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($seats as $seat)
                    <tr>
                        <td>{{ $seat->id }}</td>
                        <td>{{ $seat->flight_id}}</td>
                        <td>{{ $seat->category_id }}</td>
                        <td>{{ $seat->class_id }}</td>
                        <td>{{ $seat->status ? 'Available' : 'Reserved' }}</td>
                        <td>
                            <a href="{{ route('seats.edit', $seat->id) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('seats.destroy', $seat->id) }}" method="post" style="display: inline;">
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
        {{ $seats->links() }}
    </div>
</div>
@endsection

