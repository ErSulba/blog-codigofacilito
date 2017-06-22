<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Default')   |   Panel de administracion</title>
    <link rel="stylesheet" href="{{ asset('plugins\bootstrap\css\bootstrap.css' )}}">

</head>
<body>
    @include('admin.template.partials.nav')
    <section class="section-admin">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-heading container">@yield('title')</h3>
            </div>
                <div class="panel-body">
                    <div class="container">
                        @include('flash::message')
                        @include('admin.template.partials.errors')
                        @yield('content')
                    </div>
                </div>
        </div>
    </section>

    <footer class="admin-footer">
        <nav class="nav navbar-default">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <p class="navbar-text"> Todos los derechos reservados &copy; {{ date('Y') }}</p>
                    <p class="navbar-text navbar-right"> Alejandro Sulbaran</p>
                </div>
            </div>
        </nav>
        
    </footer>
    <script src="{{asset('plugins/jquery/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>