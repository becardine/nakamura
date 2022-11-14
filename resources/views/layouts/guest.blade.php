<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Nakamura') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="" x-data="{ isOpen: false }">
        <nav class="container px-6 py-6 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a class="text-xl font-bold text-transparent bg-clip-text" href="/">
                    <img src="{{ asset('images/logo-vermelho.svg') }}" alt="">
                        
                </a>
                <!-- Mobile menu button -->
                <div @click="isOpen = !isOpen" class="flex md:hidden">
                    <button type="button" class="text-red-700 hover:text-red-500 focus:outline-none focus:text-gray-400" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div :class="isOpen ? 'flex' : 'hidden'" class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                <a class="text-white  hover:text-red-700 font-bold delay-100" href="/">Home</a>
                <a class="text-white  hover:text-red-700 font-bold delay-100" href="{{ route('categories.index') }}">Categories</a>
                <a class="text-white  hover:text-red-700 font-bold delay-100 divide-y-2" href="{{ route('menus.index') }}">Our Menu</a>
                <a class="text-white bg-red-700 hover:bg-red-500 delay-100 py-3 px-5 rounded-xl" href="{{ route('reservations.step.one') }}">Make Reservation</a>
            </div>
        </nav>
    </div>
    <div class="font-sans text-gray-900 antialiased min-h-screen">
        {{ $slot }}
    </div>
    <footer class="bg-red-700">
        <div class="container flex flex-wrap items-center justify-center px-4 py-3 mx-auto">
            <div class="flex flex-wrap justify-center">
                <h2 class="flex items-center space-x-4 text-white">
                    Nakamura ©2022 - <a href="https://becardine.dev/" target="_blank" class="hover:text-slate-800 delay-100 pl-1"> becardine</a>
                </h2>
            </div>
        </div>
    </footer>
</body>

</html>