<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Recochive Store') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" type="image/png" href="{{ asset('images/hainon.png') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        {{-- ini bagian semacam background --}}
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0"
             style="background: linear-gradient(135deg, #474D88 50%, #FFD700 100%);">
            <div class="flex justify-center mb-6">
            <a href="/">
                <img src="{{ asset('images/hainon.png') }}" alt="Logo" class="h-20 w-auto">
            </a>
            </div>
            <h1 class="text-2xl font-bold text-white mb-4">Selamat datang di Recochive Store!</h1>

            {{-- 
                Container untuk area edit pada halaman guest
            --}}
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 card-custom bg-gray-800 text-white rounded-lg shadow-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
