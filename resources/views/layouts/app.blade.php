<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portofolio Personal | Laravel Developer & AI Enthusiast')</title>
    <meta name="description" content="Website portofolio profesional Muqsith Mirat Haqqi - Full-Stack Web Developer & Machine Learning Enthusiast berbasis Laravel & Tailwind CSS.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            900: '#312e81',
                        },
                        dark: {
                            bg: '#090d16',
                            card: '#111827',
                            border: '#1f2937',
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- FontAwesome & Devicon Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        .glass-card {
            background: rgba(17, 24, 39, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .glow-effect {
            box-shadow: 0 0 25px -5px rgba(99, 102, 241, 0.4);
        }
        .gradient-text {
            background: linear-gradient(135deg, #818cf8 0%, #c084fc 50%, #38bdf8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-[#090d16] text-slate-100 font-sans antialiased selection:bg-indigo-500 selection:text-white">

    <!-- Navigation Bar -->
    <nav x-data="{ open: false, scrolled: false }" 
         @scroll.window="scrolled = (window.pageYOffset > 20)"
         :class="{ 'bg-[#090d16]/90 backdrop-blur-md border-b border-slate-800/80 shadow-xl': scrolled, 'bg-transparent': !scrolled }"
         class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="#home" class="flex items-center gap-2 group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-indigo-600 via-purple-600 to-sky-400 p-0.5 shadow-lg shadow-indigo-500/30 group-hover:scale-105 transition-transform duration-300">
                        <div class="w-full h-full bg-slate-950 rounded-[10px] flex items-center justify-center font-extrabold text-indigo-400 text-lg">
                            MQ
                        </div>
                    </div>
                    <span class="text-xl font-bold tracking-tight text-white group-hover:text-indigo-400 transition-colors">
                        MM<span class="text-indigo-500">Haqqi</span>
                    </span>
                </a>

                <!-- Desktop Nav Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-sm font-medium text-slate-300 hover:text-indigo-400 transition-colors">Beranda</a>
                    <a href="#about" class="text-sm font-medium text-slate-300 hover:text-indigo-400 transition-colors">Tentang Saya</a>
                    <a href="#skills" class="text-sm font-medium text-slate-300 hover:text-indigo-400 transition-colors">Keahlian</a>
                    <a href="#projects" class="text-sm font-medium text-slate-300 hover:text-indigo-400 transition-colors">Portofolio</a>
                    <a href="#contact" class="text-sm font-medium text-slate-300 hover:text-indigo-400 transition-colors">Kontak</a>
                </div>

                <div class="hidden md:flex items-center gap-4">
                    @auth
                        <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 text-xs font-semibold rounded-lg bg-slate-800 text-indigo-400 border border-slate-700 hover:bg-slate-700 transition">
                            <i class="fas fa-gauge-high mr-1.5"></i> Dashboard CMS
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-xs text-slate-400 hover:text-slate-200 transition">
                            <i class="fas fa-lock mr-1"></i> Admin Login
                        </a>
                    @endauth
                    <a href="#contact" class="px-5 py-2.5 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-medium text-sm shadow-lg shadow-indigo-500/25 hover:shadow-indigo-500/40 hover:scale-105 active:scale-95 transition-all duration-300">
                        Sapa Saya <i class="fas fa-arrow-right ml-1 text-xs"></i>
                    </a>
                </div>

                <!-- Mobile Hamburger Button -->
                <div class="md:hidden">
                    <button @click="open = !open" class="p-2 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800">
                        <i class="fas" :class="open ? 'fa-times text-xl' : 'fa-bars text-xl'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div x-show="open" x-collapse class="md:hidden bg-slate-900 border-b border-slate-800 px-4 pt-2 pb-6 space-y-3">
            <a @click="open = false" href="#home" class="block py-2 text-slate-300 hover:text-indigo-400">Beranda</a>
            <a @click="open = false" href="#about" class="block py-2 text-slate-300 hover:text-indigo-400">Tentang Saya</a>
            <a @click="open = false" href="#skills" class="block py-2 text-slate-300 hover:text-indigo-400">Keahlian</a>
            <a @click="open = false" href="#projects" class="block py-2 text-slate-300 hover:text-indigo-400">Portofolio</a>
            <a @click="open = false" href="#contact" class="block py-2 text-slate-300 hover:text-indigo-400">Kontak</a>
            <div class="pt-4 border-t border-slate-800 flex flex-col gap-2">
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="w-full text-center py-2 rounded-lg bg-slate-800 text-indigo-400">Dashboard CMS</a>
                @else
                    <a href="{{ route('login') }}" class="w-full text-center py-2 text-sm text-slate-400">Admin Login</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="min-h-screen pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#060910] border-t border-slate-800/80 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left">
                <div>
                    <div class="flex items-center justify-center md:justify-start gap-2 mb-2">
                        <span class="text-lg font-bold text-white">MM<span class="text-indigo-500">Haqqi</span></span>
                    </div>
                    <p class="text-xs text-slate-400">Website Portofolio & Sistem Manajemen Konten Berbasis Laravel 11.</p>
                </div>
                
                <div class="flex items-center space-x-6">
                    <a href="https://github.com" target="_blank" class="w-9 h-9 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:text-white hover:bg-indigo-600 transition">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://linkedin.com" target="_blank" class="w-9 h-9 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:text-white hover:bg-indigo-600 transition">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="w-9 h-9 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:text-white hover:bg-indigo-600 transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>

                <div class="text-xs text-slate-500">
                    &copy; {{ date('Y') }} Muqsith Mirat Haqqi. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
