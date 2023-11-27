@extends('backend.layouts.app')
@section('pageHeading', 'Payment List')
@section('content')
<div class="row">
    <div class="col-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="mb-3" style="color: green;">
            <h2>Payment List</h2>
        </div>
        <a href="{{ route('payment.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add Payment
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th style="color: green; font-size: 16px">Id</th>
                    <th style="color: green; font-size: 16px">Customer Id</th>
                    <th style="color: green; font-size: 16px">Amount</th>
                    <th style="color: green; font-size: 16px">Pay Method</th>
                    <th style="color: green; font-size: 16px">Trans Id</th>
                    <th style="color: green; font-size: 16px">Pay Status</th>
                    <th style="color: green; font-size: 16px">Pay Date</th>
                    <th style="color: green; font-size: 16px">notes</th>
                    <th style="color: green; font-size: 16px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($payments as $b)
                    <tr>
                        <td>{{ $b->id }}</td>
                        <td>{{ $b->customer_id}}</td>
                        <td>{{ $b->amount}}</td>
                        <td>{{ $b->payment_method }}</td>
                        <td>{{ $b->transaction_id }}</td>
                        <td>{{ $b->payment_status ? 'Accept' : 'Pending' }}</td>
                        <td>{{ $b->payment_date}}</td>
                        <td>{{ $b->notes }}</td>
                        <td>
                            <a href="{{ route('payment.edit', $b->id) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('payment.destroy', $b->id) }}" method="post" style="display: inline;">
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
        {{ $payments->links() }}
    </div>
</div>
@endsection

