@extends('backend.layouts.app')
@section('title',trans('Role'))
@section('page',trans('List'))
@section('content')

<!-- Bordered table start -->
<div class="row">
    <div class="col-12">
        @if(session()->has('message'))
        {{session()->get('message')}}
        @endif
       <div>
  <div class="col-12">
    <div class="card">

            <!-- table bordered -->
            <div class="table-responsive">
                   <button class="btn btn-primary pull-right fs-1" onclick="window.location.href='{{  route('role.create') }}'">
                    <i class="fa fa-plus"></i> Add Role
                    </button>
                   <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th scope="col" style="color: green;font-size: 16px">{{__('#SL')}}</th>
                            <th scope="col" style="color: green; font-size: 16px">{{__('Name')}}</th>
                            <th scope="col" style="color: green;font-size: 16px">{{__('Identity')}}</th>
                            <th class="white-space-nowrap" style="color:green;font-size: 16px">{{__('Action')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $p)
                        <tr>
                            <th scope="row">{{ ++$loop->index }}</th>
                            <td>{{$p->name}}</td>
                            <td>{{$p->identity}}</td>
                             <td class="white-space-nowrap">
                                <a href="{{route('role.edit',encryptor('encrypt',$p->id))}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('permission.list',encryptor('encrypt',$p->id))}}">
                                    <i class="fa fa-unlock"></i>
                                </a>
                                <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <form id="form{{$p->id}}" action="{{route('role.destroy',encryptor('encrypt',$p->id))}}" method="post">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                            @empty
                         <tr>
                            <th colspan="8" class="text-center">No Pruduct Found</th>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
