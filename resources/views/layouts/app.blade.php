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

<body class="font-sans antialiased">
    <div id="app" class="flex flex-col h-screen justify-between">

        <!-- Page Heading -->
        <header class="fixed w-full">
            @include('layouts.navigation')
        </header>

        <!-- Page Content -->
        <section class="bg-white">
            <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
                <div class="grid col-span-full">
                    @yield('content')
                </div>
                <div>
                    @yield('columns')
                </div>
            </div>
        </section>
        <div class="mt-auto">
            @yield('footer')
        </div>
    </div>
</body>
</html>