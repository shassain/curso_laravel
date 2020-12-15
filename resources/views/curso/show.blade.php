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
        <a href="{{url()->previous()}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
            <i class="zmdi zmdi-plus"></i>atras</a>
        
    </div>
    </div>
</div>
<div class="card">
  <div class="card-header">
    <strong>{{$curso->name}}</strong>
    <small>fecha inicio:
      <code>{{$curso->fecha_inicial}}</code>
    </small>
  </div>
  <div class="card-body">
    <div class="row">
        <label class="success">{{$curso->creador->name}}</label>
    </div>
    <pre>Participantes</pre>
    @if(count($curso->participantes)>0)
    @foreach($curso->participantes as $participante)

    
    <a href="#">
    {{$participante->nombre}} 
    {{$participante->appaterno}} 
    {{$participante->apmaterno}} 
    </a>
    <br>
    @endforeach
    @else
      <div class="alert alert-danger">
        Este Usuario no tiene cursos
      </div>
    @endif
  </div>
</div>

@endsection
@push("scripts")

@endpush