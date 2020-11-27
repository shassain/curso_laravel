<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    Lista de Cursos
    </h1>
    @if(isset($message)!=null)
    {{$message}}
    @endif
    <table>
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
</body>
</html>