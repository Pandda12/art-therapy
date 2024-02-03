<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('additional_meta')

        <title>Laravel Shop - @yield( 'title', 'Page')</title>

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        @stack('css')
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    </head>
    <body class="min-h-svh">
    <x-guest.header/>
    <main class="">
        <div id="primary" class="container 2xl mx-auto flex flex-col pt-16">
            @yield('content')
        </div>
    </main>
    <x-guest.footer/>
    </body>
</html>
