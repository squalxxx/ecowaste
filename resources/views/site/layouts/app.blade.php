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
    @include('site.layouts.header')

    <main>
        {!! $content !!}
    </main>

    @include('site.layouts.footer')

    @include('site.layouts.modals')

    @vite(['resources/js/app.js'])
</body>

</html>
