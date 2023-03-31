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

<body class="font-sans antialiased h-full" style="background-image: url('https://img.freepik.com/free-vector/gradient-blur-pink-blue-abstract-background_53876-117324.jpg?w=2000&t=st=1680194193~exp=1680194793~hmac=99700f4ff20f27ce2142a52e066b39ea4e4e22a449fbe47962b791d794197458');">
<div class="flex flex-col h-screen max-w-screen-xl mx-auto">
    {{--        <header class="fixed w-full">--}}
    {{--            @include('layouts.navigation')--}}
    {{--        </header>--}}
    <header class="">
        @include('layouts.navigation')
    </header>
    <div class="">
        @yield('user')
    </div>
    <footer>
        @yield('footer')
    </footer>
</div>
</body>
</html>