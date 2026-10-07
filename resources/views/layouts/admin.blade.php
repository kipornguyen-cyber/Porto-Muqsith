<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard CMS')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#090d16] text-slate-100 font-sans antialiased min-h-screen flex">

    <!-- Admin Sidebar -->
    <aside class="w-64 bg-slate-900 border-r border-slate-800 flex flex-col justify-between hidden md:flex shrink-0">
        <div>
            <!-- Header Logo -->
            <div class="h-20 flex items-center px-6 border-b border-slate-800">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-indigo-600 flex items-center justify-center font-extrabold text-white text-sm">
                        MQ
                    </div>
                    <span class="text-base font-bold text-white">Admin CMS</span>
                </a>
            </div>

            <!-- Navigation Links -->
            <nav class="p-4 space-y-1 text-xs font-semibold">
                <a href="{{ route('admin.dashboard') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition {{ request()->routeIs('admin.dashboard') ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-600/30' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">
                    <i class="fas fa-chart-line text-sm"></i> Dashboard Overview
                </a>

                <a href="{{ route('admin.projects.index') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition {{ request()->routeIs('admin.projects.*') ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-600/30' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">
                    <i class="fas fa-briefcase text-sm"></i> Kelola Proyek
                </a>

                <a href="{{ route('admin.skills.index') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition {{ request()->routeIs('admin.skills.*') ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-600/30' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">
                    <i class="fas fa-layer-group text-sm"></i> Kelola Keahlian
                </a>

                <a href="{{ route('admin.messages.index') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition {{ request()->routeIs('admin.messages.*') ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-600/30' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">
                    <i class="fas fa-envelope text-sm"></i> Pesan Masuk
                </a>
            </nav>
        </div>

        <!-- Sidebar Footer -->
        <div class="p-4 border-t border-slate-800 space-y-2">
            <a href="{{ route('home') }}" target="_blank" class="w-full flex items-center justify-center gap-2 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 text-xs font-semibold transition">
                <i class="fas fa-external-link-alt text-xs"></i> Lihat Website Utama
            </a>
            
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center gap-2 py-2.5 rounded-xl bg-rose-950/60 hover:bg-rose-900 text-rose-300 text-xs font-semibold border border-rose-900 transition">
                    <i class="fas fa-power-off text-xs"></i> Keluar (Logout)
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col min-w-0">
        <!-- Top Bar -->
        <header class="h-20 bg-slate-900/80 border-b border-slate-800 px-6 flex items-center justify-between sticky top-0 z-30 backdrop-blur-md">
            <h1 class="text-lg font-bold text-white">@yield('page_title', 'Dashboard')</h1>
            
            <div class="flex items-center gap-4">
                <span class="text-xs text-slate-400">Selamat datang, <strong class="text-indigo-400">{{ auth()->user()->name ?? 'Admin' }}</strong></span>
            </div>
        </header>

        <!-- Page Body -->
        <main class="p-6 sm:p-8 flex-1">
            @if(session('success'))
                <div class="mb-6 p-4 rounded-xl bg-emerald-950/80 border border-emerald-600/50 text-emerald-200 text-xs font-semibold flex items-center gap-3">
                    <i class="fas fa-circle-check text-emerald-400 text-lg"></i>
                    <div>{{ session('success') }}</div>
                </div>
            @endif

            @yield('content')
        </main>
    </div>

</body>
</html>
