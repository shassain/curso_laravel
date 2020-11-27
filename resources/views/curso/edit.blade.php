<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Crear Nuevo Curso
    </h1>
    <form action="{{route('curso.update',1)}}" method="post">
        <input type="hidden" name="_method" value="put">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="name" value="{{$curso['name']}}">
        <label >Valor</label>
        <input type="text" name="valor" value="{{$curso['valor']}}">
        <button type="submit">Editar informacion</button>
    </form>
</body>
</html>