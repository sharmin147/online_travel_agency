@extends('backend.layouts.app')
@section('pageHeading', 'Flight Class List')
@section('content')
<div class="row">
    <div class="col-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="mb-3" style="color: green;">
            <h2>Flight Class List</h2>
        </div>
        <a href="{{ route('flight_class.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add Class
        </a>
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th style="color: green;font-size: 20px;">ID</th>
                     <th style="color: green;font-size: 20px;">Class Name</th>
                    <th style="color: green;font-size: 20px;">Description</th>
                    <th style="color: green;font-size: 20px;">Baggage Allowance</th>
                     <th style="color: green;font-size: 20px;">Refundable</th>
                    <th style="color: green;font-size: 20px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($flight_class as $class)
                    <tr class="text-center">
                        <td>{{ $class->id }}</td>
                        <td>{{ $class->class_name }}</td>
                        <td>{{ $class->description }}</td>
                        <td>{{ $class->baggage_allowance }}</td>
                        <td>{{ $class->refundable}}</td>
                        <td>{{ $class->status ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('flight_class.edit', $class->id) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('flight_class.destroy', $class->id) }}" method="post" style="display: inline;">
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
        {{ $flight_class->links() }}
    </div>
</div>
@endsection

