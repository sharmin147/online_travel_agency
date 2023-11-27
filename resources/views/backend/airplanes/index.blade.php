@extends('backend.layouts.app')
@section('pageHeading', 'Airplanes List')
@section('content')
<div class="row">
    <div class="col-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="mb-3" style="color: green;">
            <h2>Airplane List</h2>
        </div>
        <a href="{{ route('bookings.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add Airplane
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th style="color: green;">Id</th>
                    <th style="color: green;">Name</th>
                    <th style="color: green;">Description</th>
                    <th style="color: green;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($airplanes as $b)
                    <tr>
                        <td>{{ $b->id }}</td>
                        <td>{{ $b->name}}</td>
                        <td>{{ $b->description}}</td>
                         <td>
                            <a href="{{ route('airplanes.edit', $b->id) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('airplanes.destroy', $b->id) }}" method="post" style="display: inline;">
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
        {{ $airplanes->links() }}
    </div>
</div>
@endsection

