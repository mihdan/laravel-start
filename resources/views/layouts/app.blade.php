<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    @vite('resources/js/app.js')
</head>
<body class="antialiased bg-blue-200">
    @include('parts.header')
    <main class="py-16 lg:py-20">
        <div class="container">
            <h1 class="text-[26px] sm:text-xl xl:text-[48px] 2xl:text-2xl font-black">
                Лучшие статьи
            </h1>
            @yield('content')
        </div>
    </main>
    @include('parts.footer')
</body>
</html>
