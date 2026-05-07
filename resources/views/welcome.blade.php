<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-gray-100">
        <div class="min-h-screen flex flex-col items-center justify-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-8">Welcome to the test landing page</h1>
            <a href="{{ route('register') }}" class="inline-block px-6 py-3 bg-gray-800 text-white font-semibold rounded-md hover:bg-gray-700 transition">
                Register
            </a>
        </div>
    </body>
</html>
