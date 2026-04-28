<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Pricy')</title>

    <link rel="stylesheet" href="{{ asset('v2/css/google-fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('v2/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/client-home.css') }}">
    @stack('styles')
</head>
<body class="pricy-body bg-light">
    @include('layouts.client_layout.navbar')

    <main class="pricy-main">
        @yield('content')
    </main>

    <script src="{{ asset('v2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('client/js/client-home.js') }}"></script>
    @stack('scripts')
</body>
</html>
