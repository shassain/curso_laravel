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
        <div class="card-header">Crear Curso</div>
        <div class="card-body card-block">
            <form action="{{route('curso.store')}}" method="post" class="">
            @csrf
            
        
        
                @if(!Auth::check())
                <div class="form-group">
                    <div class="input-group">
                        <select name="user_id" id="user_id" class="form-control">
                            <option value="">Seleccione Usuario creador</option>
                            @foreach($usuarios as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                @else
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" value="{{Auth::user()->name}}, {{Auth::user()->email}}" disabled class="form-control">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                @endif
                <div class="form-group">
                    <div class="input-group">
                        <select name="tipo" id="tipo" class="form-control">
                            <option value="publico">Publico</option>
                            <option value="privado">Privado</option>
                        </select>
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Escriba el nombre">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="number" name="precio" id="precio" class="form-control" placeholder="Escriba el precio">
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
                        <input type="date" name="fecha_inicial" id="fecha_inicial" class="form-control" placeholder="Escriba la fecha inicial" value="{{now()->toDateString()}}">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-secondary btn-sm">Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection