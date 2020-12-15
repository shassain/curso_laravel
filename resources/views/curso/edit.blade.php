@extends('layouts.layout_principal')
@section('content')
<div class="table-data__tool">
    <div class="table-data__tool-left">
        
        
    <div class="table-data__tool-right">
        <a href="{{url()->previous()}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
            <i class="zmdi zmdi-plus"></i>atras</a>
        
    </div>
    </div>
</div>
<div class="row">
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">Editar Curso</div>
        <div class="card-body card-block">
            <form action="{{route('curso.update',$curso->id)}}" method="post" class="">
            <input type="hidden" name="_method" value="put">
            @csrf
                <div class="form-group">
                    <div class="input-group">
                        <select name="user_id" id="user_id" class="form-control">
                            <option value="">Seleccione Usuario creador</option>
                            @foreach($usuarios as $user)
                                @if($curso->user_id==$user->id)
                                    <option value="{{$user->id}}" selected>{{$user->name}}</option>
                                @else
                                    <option value="{{$user->id}}" >{{$user->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <select name="tipo" id="tipo" class="form-control">
                            <option value="publico" {{$curso->tipo==="publico"?'selected':''}}>Publico</option>
                            <option value="privado" {{$curso->tipo==="privado"?'selected':''}}>Privado</option>
                        </select>
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Escriba el nombre" value="{{$curso->name}}">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="number" name="precio" id="precio" class="form-control" placeholder="Escriba el precio" value="{{$curso->precio}}">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        Fecha Inicial
                    </div>
                    <div class="input-group">
                        <input type="date" name="fecha_inicial" id="fecha_inicial" class="form-control" placeholder="Escriba la fecha inicial" value="{{$curso->fecha_inicial->toDateString()}}">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-secondary btn-sm">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection