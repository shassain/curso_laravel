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
    <form action="{{route('curso.store')}}" method="post">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="name">
        <label >Valor</label>
        <input type="text" name="valor">
        <button type="submit">Enviar informacion</button>
    </form>
</body>
</html>