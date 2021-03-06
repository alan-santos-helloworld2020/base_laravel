<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/material-icons/iconfont/material-icons.css">
    <link rel="stylesheet" href="/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="/materialize-css/dist/css/materialize.min.css">
    <script src="/sweetalert2/dist/sweetalert2.min.css"></script>
    <script src="/materialize-css/dist/js/materialize.min.js"></script>
    <title>@yield('title')</title>
</head>
<body>
    <x-navegador.navegador :title="$title"/>
      <div class="row">         
          @yield('content')
    </div>

    <script src="/js/script.js"></script>
</body>
</html>