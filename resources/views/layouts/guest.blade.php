<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HireMe') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-hireme-light text-hireme-dark antialiased">
    <div class="min-h-screen flex flex-col justify-center items-center px-4">


        {{-- Card Content --}}
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
            @yield('content')
        </div>
    </div>
</body>

</html>