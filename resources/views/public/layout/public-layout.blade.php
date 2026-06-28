<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="/build/assets/logo-PC-Veneto.png">
        <title>@yield('title')</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="bg-light">
        @include('public.layout.navbar')

        @yield('content')

        @include('public.layout.footer')
    </body>
</html>
