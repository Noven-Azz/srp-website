<!DOCTYPE html>
<html class="scroll-smooth" lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>@yield('title', 'PT SRP - Industrial IoT & RFID Solutions')</title>

    <!-- External Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@300;400;500;600;700&family=Fira+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (Gunakan CSS hasil compile npm run dev) -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts (Bundled Alpine.js & Motion One) -->
    <script defer src="{{ asset('js/app.js') }}"></script>
        

    <!-- Custom Style Bawaan dari Desain -->
    <style>
        body {
            background-color: #F5F6F8;
            color: #333333;
            overflow-x: hidden;
        }

        .scroll-reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 2s cubic-bezier(0.25, 1, 0.5, 1), transform 2s cubic-bezier(0.25, 1, 0.5, 1);
        }
        
        .scroll-reveal.is-revealed {
            opacity: 1;
            transform: translateY(0);
        }

        .hover-card {
            transition: transform 0.8s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.8s cubic-bezier(0.25, 1, 0.5, 1);
        }
        .hover-card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-hero {
            opacity: 0;
            animation: fadeUp 2.5s cubic-bezier(0.25, 1, 0.5, 1) forwards;
        }
        .animate-hero-delay-1 { animation-delay: 0.2s; }
        .animate-hero-delay-2 { animation-delay: 0.4s; }
    </style>
</head>
<body class="antialiased bg-surface">
    <div class="content-wrapper">
        <!-- Include Navbar Component -->
        @include('components.navbar')

        <!-- Main Content Section -->
        <main >
            @yield('content')
        </main>

        <!-- Include Footer Component -->
        <x-footer />
    </div>

    <!-- Script Scroll Animation -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.scroll-reveal').forEach((el) => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>