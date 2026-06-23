<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - Admin Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://api.fontshare.com/v2/css?f[]=clash-display@400,500,600,700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-green-50 selection:bg-green-200 selection:text-green-900">
        <div class="min-h-screen flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
            
            <!-- Decorative Background Element -->
            <div class="absolute top-0 inset-x-0 h-64 bg-green-600 rounded-b-[4rem] z-0"></div>

            <div class="relative z-10 w-full sm:max-w-md">
                <!-- Logo -->
                <div class="flex justify-center mb-8">
                    <a href="/" class="flex items-center gap-2">
                        <span class="text-4xl font-bold text-white font-display tracking-tight">Roshni<span class="text-green-200">Admin</span></span>
                    </a>
                </div>

                <!-- Auth Card -->
                <div class="w-full px-8 py-10 bg-white shadow-2xl overflow-hidden rounded-2xl border border-gray-100">
                    {{ $slot }}
                </div>
                
                <!-- Footer -->
                <div class="mt-8 text-center text-sm text-green-800 font-medium">
                    &copy; {{ date('Y') }} Roshni Care Home. All rights reserved.
                </div>
            </div>
        </div>
    </body>
</html>
