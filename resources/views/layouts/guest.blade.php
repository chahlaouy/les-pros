<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Les Pros') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @livewireStyles

    </head>
    <body>
        <div class="relative font-sans text-gray-900 antialiased">
            <div class="absolute top-0 left-0 z-10 w-full h-screen">
                <img src="{{asset('assets/images/bg-cover.png')}}" alt="background-cover-les-pros" class="bg-cover bg-center object-cover w-full h-screen">
            </div>
            <div class="relative z-20">
                {{ $slot }}
            </div>
        </div>
        @livewireScripts
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
