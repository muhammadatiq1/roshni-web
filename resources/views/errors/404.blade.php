<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Not Found - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@400,500,600,700&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-900 bg-gray-50 min-h-screen flex items-center justify-center p-4">

    <!-- Decorative Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute -top-1/2 -right-1/2 w-[1000px] h-[1000px] rounded-full bg-green-500/5 blur-3xl mix-blend-multiply"></div>
        <div class="absolute -bottom-1/2 -left-1/2 w-[1000px] h-[1000px] rounded-full bg-blue-500/5 blur-3xl mix-blend-multiply"></div>
    </div>

    <div class="relative z-10 w-full max-w-2xl text-center space-y-8">
        
        <!-- 404 Header -->
        <div class="relative">
            <h1 class="text-[10rem] md:text-[14rem] font-bold tracking-tighter leading-none" style="font-family: 'Clash Display', sans-serif;">
                <span class="text-transparent bg-clip-text bg-gradient-to-br from-gray-800 to-gray-500">4</span>
                <span class="text-transparent bg-clip-text bg-gradient-to-br from-gray-300 to-gray-100">0</span>
                <span class="text-transparent bg-clip-text bg-gradient-to-br from-gray-800 to-gray-500">4</span>
            </h1>
            <div class="absolute inset-0 flex items-center justify-center backdrop-blur-[1px]">
                <div class="bg-white/80 backdrop-blur-md px-6 py-2 rounded-full border border-white shadow-xl shadow-gray-200/50 transform -translate-y-4">
                    <span class="text-sm font-semibold tracking-widest text-gray-800 uppercase">Page Not Found</span>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="space-y-4 px-4 mt-8">
            <h2 class="text-2xl md:text-3xl font-semibold text-gray-900 tracking-tight">Oops! You seem to be lost.</h2>
            <p class="text-gray-500 max-w-md mx-auto text-base leading-relaxed">
                The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
            </p>
        </div>

        <!-- Actions -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
            <button onclick="window.history.back()" class="w-full sm:w-auto px-8 py-3.5 bg-white border border-gray-200 text-gray-700 font-medium rounded-xl hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:ring-4 focus:ring-gray-100 transition-all flex items-center justify-center gap-2 group shadow-sm">
                <i data-lucide="arrow-left" class="w-4 h-4 group-hover:-translate-x-1 transition-transform"></i>
                Go Back
            </button>
            <a href="{{ url('/') }}" class="w-full sm:w-auto px-8 py-3.5 bg-gray-900 text-white font-medium rounded-xl hover:bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-200 transition-all shadow-lg flex items-center justify-center gap-2">
                <i data-lucide="home" class="w-4 h-4"></i>
                Return Home
            </a>
        </div>
        
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
        });
    </script>
</body>
</html>
