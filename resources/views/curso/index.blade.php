@extends('layouts.layout_principal')
@push('styles')
<style>
.table-index{
    border:1px solid red;
}
</style>
@endpush
@section('content')
<div class="table-data__tool">
    <div class="table-data__tool-left">
        
        
    <div class="table-data__tool-right">
        <a href="{{route('curso.create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
            <i class="zmdi zmdi-plus"></i>Nuevo curso</a>
        
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="{{route('curso.index')}}" method="get">
            <label>Precio Incial</label>
            <input type="text" name="precio_inicial" value="">
            <label>Precio Final</label>
            <input type="text" name="precio_final" value="">
            <label for="precio">Tipo</label>
            <select name="tipo" id="tipo">
                <option value="all">Todos</option>
                <option value="publico">Publico</option>
                <option value="privado">Privado</option>
            </select>
            <label for="usuario">usuario</label>
            <select name="user_id" id="user_id">
                <option value="all">Todos</option>
                @foreach($usuarios as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <button class="btn btn-success">
            <i class="fa fa-search"></i>
            Buscar
            </button>
        </form>
    </div>
</div>
<div class="row m-t-30">
    <div class="col-md-12">
        @if(isset($msn))
            <div class="alert alert-success">{{$msn}}</div>
        @endif
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th> name</th>
                        <th> cant participantes</th>
                        <th> precio</th>
                        <th> activo</th>
                        <th> tipo</th>
                        <th> Usuario</th>
                        <th> fecha_inicial</th>
                        <th>opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cursos as $curso)
                      <tr>
                        <td> {{$curso->name}}</td>
                        <td> {{$curso->cantidad_participantes}}</td>
                        <td> {{$curso->precio}}</td>
                        <td> {{$curso->activo==1 ? "Activo" : "Inactivo"}}</td>
                        <td> {{$curso->tipo}}</td>
                        <td> {{$curso->creador->name}}</td>
                        <td> {{$curso->fecha_inicial}}</td>
                        <td>
                        <a href="{{route('curso.edit',$curso->id)}}"><i class="fa fa-edit"></i> editar</a>
                        <a href="{{route('curso.show',$curso->id)}}"><i class="fa fa-eye"></i> ver mas</a>
                        <form action="{{route('curso.destroy',$curso->id)}}" method="post">
                          @csrf
                          <input type="hidden" name="_method" value="delete">
                          @if($curso->activo==1)
                          <button type="submit" ><i class="fa fa-trash"></i>
                          Desactivar
                          </button>
                          @else
                          <button type="submit" ><i class="fa fa-active"></i>
                          Activar
                          </button>
                          @endif
                        </form>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
@endsection
@push("scripts")

@endpush