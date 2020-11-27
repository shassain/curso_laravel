<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Este es el show de
    <h1>
        {{$curso["name"]}}
    </h1>

    Otras informaciones:
    <p>
    {{$curso["valor"]}}
    </p>
    <a href="{{route('curso.index')}}">Volver a la lista</a>
</body>
</html>