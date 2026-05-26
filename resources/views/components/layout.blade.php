<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Roshni Care Home | Empower Change' }}</title>
    
    <!-- SEO Best Practices -->
    <meta name="description" content="Roshni Care Home provides education, care, and a loving home for visually impaired girls.">
    <meta property="og:title" content="{{ $title ?? 'Roshni Care Home' }}">
    <meta property="og:description" content="Roshni Care Home provides education, care, and a loving home for visually impaired girls.">
    <meta property="og:type" content="website">
    
    <!-- Design System -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-surface">
    <x-header />
    
    <main>
        {{ $slot }}
    </main>
    
    <x-footer />

    <!-- Scripts -->
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize Premium Icons
            lucide.createIcons();
            
            // Initialize AOS Animations
            AOS.init({
                duration: 800,
                easing: 'ease-out-cubic',
                once: true,
                offset: 50,
            });
        });
    </script>
</body>
</html>
