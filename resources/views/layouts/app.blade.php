<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token">

    <title>EQ</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased h-full">
    <div id="app" class="flex flex-col h-screen justify-between max-w-screen-xl mx-auto">
{{--        <header class="fixed w-full">--}}
{{--            @include('layouts.navigation')--}}
{{--        </header>--}}
        <header class="">
            @include('layouts.navigation')
        </header>

        <main class="">
            @yield('content')
        </main>

        <footer class="">
            @yield('footer')
        </footer>
    </div>

</body>
</html>