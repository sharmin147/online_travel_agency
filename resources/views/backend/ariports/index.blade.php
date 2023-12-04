@extends('backend.layouts.app')
@section('pageHeading', 'Airport List')
@section('content')
<div class="row">
    <div class="col-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="mb-3" style="color: green;">
            <h2>Airport List</h2>
        </div>
        <a href="{{ route('ariports.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add Airport
        </a>
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th style="color: green; font-size: 15px;">Id</th>
                    <th style="color: green; font-size: 15px;">City Id</th>
                    <th style="color: green; font-size: 15px;">Name</th>
                    <th style="color: green; font-size: 15px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($ariports as $b)
                    <tr class="text-center">
                        <td>{{ $b->id }}</td>
                        <td>{{ $b->city_id}}</td>
                        <td>{{ $b->name}}</td>

                         <td>
                            <a href="{{ route('ariports.edit', $b->id) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('ariports.destroy', $b->id) }}" method="post" style="display: inline;">
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
        </table><br><br>
      {{ $ariports->links() }}
    </div>
</div>
@endsection

