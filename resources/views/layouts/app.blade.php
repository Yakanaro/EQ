<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://unpkg.com/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

        <!-- Подключение библиотеки Alpine.js -->
        <script src="https://unpkg.com/alpinejs@3.4.2/dist/cdn.min.js" defer></script>
    </head>
    <body class="font-sans antialiased h-full">
        <div class="flex flex-col h-full max-w-screen-xl mx-auto">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <main class="mt-[40px] h-full">
                @yield('content')
            </main>

{{--            <footer>--}}
{{--                @include('layouts.footer')--}}
{{--            </footer>--}}
        </div>
    </body>
</html>
