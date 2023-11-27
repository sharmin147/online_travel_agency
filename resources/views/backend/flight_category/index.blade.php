@extends('backend.layouts.app')
@section('pageHeading', 'Flight Category List')
@section('content')
<div class="row">
    <div class="col-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="mb-3" style="color: green;">
            <h2>Flight Category List</h2>
        </div>
        <a href="{{ route('flight_category.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add Category Flight
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th style="color: green; font-size: 16px">ID</th>
                    <th style="color: green; font-size: 16px">Category Name</th>
                    <th style="color: green; font-size: 16px">Description</th>
                    <th style="color: green; font-size: 16px">Price</th>
                    <th style="color: green; font-size: 16px">Baggage Allowance</th>
                    <th style="color: green; font-size: 16px">Refundable</th>
                    <th style="color: green; font-size: 16px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($flight_category as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->price }}</td>
                        <td>{{ $category->baggage_allowance }}</td>
                        <td>{{ $category->refundable ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('flight_category.edit', $category->id) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('flight_category.destroy', $category->id) }}" method="post" style="display: inline;">
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
        {{ $flight_category->links() }}
    </div>
</div>
@endsection

