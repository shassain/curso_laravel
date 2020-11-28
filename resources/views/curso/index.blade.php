@extends('layouts.layout_principal')
@push('styles')
<style>
.table-index{
    border:1px solid red;
}
</style>
@endpush
@section('content')
<h1>
Lista de Cursos
</h1>
<table class="table-index">
<tr>
<th>Nombre</th>
<th>valor</th>
<th>Opt</th>
</tr>
<tr>
    <td>Laravel</td>
    <td>100</td>
    <td>
        <a href="{{route('curso.show',1)}}">Mostrar</a>
        <a href="{{route('curso.edit',1)}}">Editar</a>
        <form action="{{route('curso.destroy',1)}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="delete">
            <button type="submit">Eliminar</button>
        </form>
        <a href="{{url('curso_miaccion/Laravel')}}">Visitar mi accion</a>
    </td>
</tr>
</table>

<a href="{{route('curso.create')}}">Crear nuevo Curso</a>
@endsection
@section('contenido_mid')
<div style="background:red">
    incluido desde el index de curso
</div>
@endsection
@push("scripts")
<script>
alert("holaa desde el index")
</script>
@endpush