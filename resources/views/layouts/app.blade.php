<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <!-- CSRF Token -->
    <meta content="{{ csrf_token() }}" name="csrf-token">

    <title>Эковейст</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css'])
</head>

<body>
    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    @include('layouts.modals')

    @vite(['resources/js/app.js'])
</body>

</html>
