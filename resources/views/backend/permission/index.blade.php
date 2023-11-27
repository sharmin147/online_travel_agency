@extends('backend.layouts.app')
@section('title',trans('Permission'))
@section('page',trans('List'))

@section('content')
<style>
.list-group-collapse li>ul li:first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.list-group-collapse li>ul{
  margin-left: 16px;
  margin-right: 16px;
  margin-bottom: 11px;
}
.custom-text-color {
        color: green;
    }
</style>
<div class="row">
    <div class="col-12">
        <h2 class="custom-text-color">Grid View</h2>
    </div>
        <div class="col-12">
        <div class="card">
            <h4>{{$role->type}}</h4>
            @php
                $routes=array();
                $auto_accept=array('GET',"DELETE");
                $permissions=array();
                foreach($permission as $perm){
                    $permissions[$perm->name]=$perm->name;
                }
            @endphp
            @foreach(Illuminate\Support\Facades\Route::getRoutes() as $v)
                @if($v->getPrefix()=="/admin")
                    @php
                        $rl=explode('.',$v->getName());
                        if(isset($rl[1]))
                            $routes[$rl[0]][]=array("method"=>$v->methods[0],"function"=>$rl[1]);
                    @endphp
                @endif
            @endforeach
            <form action="{{route('permission.save',encryptor('encrypt',$role->id))}}" method="post">
                @csrf
                 <div class="row">
                    @forelse($routes as $k => $r)
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="d-flex align-items-center mb-3">
                                <input type="checkbox" onchange="checkAll(this)">
                                <strong>{{__($k)}}</strong>
                            </div>
                            <div class="d-flex flex-wrap">
                                @if($r)
                                    @foreach($r as $name)
                                        @if(in_array($name['method'], $auto_accept))
                                            <label class="list-group-item bg-dark mr-3 mb-2">
                                                @if(in_array($k.'.'.$name['function'], $permissions))
                                                    <input type="checkbox" checked name="permission[]" value="{{$k.'.'.$name['function']}}"> {{__($name['function'])}}
                                                @else
                                                    <input type="checkbox" name="permission[]" value="{{$k.'.'.$name['function']}}"> {{__($name['function'])}}
                                                @endif
                                            </label>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    @empty

                    @endforelse
                </div>

                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary"> Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function checkAll(e){
        if($(e).prop('checked')==true)
            $(e).next('.list-group').find('input').attr('checked','checked');
        else
            $(e).next('.list-group').find('input').removeAttr('checked','checked');
    }

</script>
@endpush
