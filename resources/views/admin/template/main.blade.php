<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Default')   |   Panel de administracion</title>
    <link rel="stylesheet" href="{{ asset('plugins\bootstrap\css\bootstrap.css' )}}">

</head>
<body>
    <section>
        @include('admin.template.partials.nav')
        @yield('content')

    </section>

    <footer>
        
    </footer>
    <script src="{{asset('plugins/jquery/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>