<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/second/second.css')}}" />
    @stack('styles')
</head>
<body>
    <nav class="nav-class" id="nav-id">
        este debe de estar en todas partes
    </nav>
    <div>
        Dentro del cuerpo, top
    </div>
    @yield('contenido')
    <div>
        Dentro del cuerpo, mid
    </div>
    @yield('contenido_mid')
    <div>
        Dentro del cuerpo, bottom
    </div>
    <script src="{{asset('assets/js/main.js')}}"></script>
    @stack('scripts')
</body>
</html>