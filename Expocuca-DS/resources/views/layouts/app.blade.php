<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Expocuca DS</title>
    </head>
    <body class="bg-bg-dark font-poppins text-white">
        @include('components.header')
        
        @yield('content', 'nenhum conteúdo renderizado')
    </body>
</html>