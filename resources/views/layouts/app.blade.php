<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        {{-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script> --}}
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://kit.fontawesome.com/430ac66ab4.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
             <script
        defer
        src="https://unpkg.com/alpinejs-slug@latest/dist/slug.min.js"
        ></script>

        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="grid font-sans antialiased grid-col-12" x-data="{open:false}">
        {{-- <x-banner /> --}}
        <div class="">
            <x-aside></x-aside>
        </div>

        <div class="min-h-screen col-start-2 col-end-13 bg-gray-100 ">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <div x-show="open" x-on:click="open = false" class="fixed inset-0 z-30 bg-gray-900 bg-opacity-50 dark:bg-opacity-80 "></div>

        @stack('modals')

        @livewireScripts
        <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
        @stack('js')

    </body>
</html>
