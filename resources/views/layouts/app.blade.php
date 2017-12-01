<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Consulta Advogado</title>

    <!-- Styles -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500,700,400italic|Material+Icons">
</head>
<body>
    <div id="app">
        <vue-nav></vue-nav>
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
