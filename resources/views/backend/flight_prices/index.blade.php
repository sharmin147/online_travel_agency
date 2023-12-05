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
        <a href="{{ route('flight_prices.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add Price
        </a>
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>Flight Category Id</th>
                    <th>Flight Class Id</th>
                    <th>Flight Route Id</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($flight_prices as $prices)
                    <tr class="text-center">
                        <td>{{ $prices->id }}</td>
                        <td>{{ $prices->fcategory?->name}}</td>
                        <td>{{ $prices->fclass?->name }}</td>
                        <td>{{ $prices->froute?->name }}</td>
                        <td>{{ $prices->price }}</td>
                        <td>{{ $prices->status }}</td>
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

