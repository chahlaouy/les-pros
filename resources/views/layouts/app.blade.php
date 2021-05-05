<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        
        <!-- ionicons -->
        <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        {{-- flash component --}}
        @if (session('success'))
            <x-flash type="success">
                {{ session('success') }}
            </x-flash>
        @endif
        @if (session('error'))
            <x-flash type="error">
                {{ session('error') }}
            </x-flash>
        @endif
        <x-jet-banner />

        <div class="min-h-screen bg-green-100">
            <div class="sm:flex">
                <div class="w-40 px-2 py-8 min-h-screen">
                    <div class="bg-white px-4 py-8 rounded">
                        @include('layouts.side-nav-bar')
                    </div>
                </div>
                <div class="flex-1">
                    @livewire('navigation-menu')

                    <!-- Page Heading -->
                    @if (isset($header))
                        <header class="">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endif
        
                    <!-- Page Content -->
                    <main>
                        {{ $slot }}
                    </main>
                </div>

            </div>

        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
