<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>X WEB STORE</title>

        <!-- Fonts -->

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="bg-slate-100 dark:bg-slate-800">
        <livewire:navbar />
        
        <div class="font-sans text-gray-900 antialiased ">
            {{ $slot }}
        </div>
        
        <livewire:shopping-cart >    
        
        <livewire:footer />
        
        @livewireScripts
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
        
    </body>
</html>
