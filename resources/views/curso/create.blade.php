@extends('layouts.layout_principal')
@section('content')
<h1>
        Crear Nuevo Curso
    </h1>
    <form action="{{route('curso.store')}}" method="post">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="name">
        <label >Valor</label>
        <input type="text" name="valor">
        <button type="submit">Enviar informacion</button>
    </form>
@endsection