@extends('layouts.app')

@section('title', 'Muqsith Mirat Haqqi | Portofolio Web Developer & AI Specialist')

@section('content')

<!-- HERO SECTION -->
<section id="home" class="relative py-20 lg:py-32 overflow-hidden">
    <!-- Glow Background Accents -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-indigo-600/15 rounded-full blur-[140px] pointer-events-none"></div>
    <div class="absolute top-1/3 right-10 w-[400px] h-[400px] bg-purple-600/15 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Bio Info -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-950/60 border border-indigo-500/30 text-indigo-300 text-xs font-semibold backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                    Open for Freelance & Full-time Opportunities
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight">
                    Halo, Saya <br class="hidden sm:inline">
                    <span class="gradient-text">Muqsith Mirat Haqqi</span>
                </h1>

                <p class="text-lg sm:text-xl font-medium text-slate-300 max-w-2xl">
                    <span class="text-indigo-400">Full-Stack Web Developer</span> & <span class="text-sky-400">Machine Learning Enthusiast</span> yang berfokus membangun aplikasi web modern, cepat, skalabel, dan berestetika tinggi.
                </p>

                <p class="text-sm text-slate-400 leading-relaxed max-w-xl">
                    Berpengalaman dalam pengembangan perangkat lunak berbasis PHP (Laravel), ekosistem JavaScript (Vue.js/React), integrasi RESTful API, serta implementasi kecerdasan buatan dalam memecahkan masalah nyata.
                </p>

                <div class="pt-4 flex flex-wrap items-center justify-center lg:justify-start gap-4">
                    <a href="#projects" class="px-7 py-3.5 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold text-sm shadow-xl shadow-indigo-600/30 hover:shadow-indigo-600/50 hover:-translate-y-0.5 transition-all duration-300">
                        <i class="fas fa-briefcase mr-2"></i> Lihat Portofolio
                    </a>
                    <a href="#contact" class="px-7 py-3.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-slate-200 border border-slate-700 font-semibold text-sm hover:-translate-y-0.5 transition-all duration-300">
                        <i class="fas fa-paper-plane mr-2 text-indigo-400"></i> Hubungi Saya
                    </a>
                    <a href="#" onclick="alert('Fitur Download CV dapat dikustomisasi dengan file PDF CV Anda.'); return false;" class="px-5 py-3.5 rounded-xl bg-slate-900/50 hover:bg-slate-800 text-slate-400 hover:text-white border border-slate-800 font-medium text-sm transition">
                        <i class="fas fa-download mr-1.5"></i> Download CV
                    </a>
                </div>

                <!-- Live Metrics -->
                <div class="pt-8 border-t border-slate-800/80 grid grid-cols-3 gap-4 text-center lg:text-left max-w-md">
                    <div>
                        <span class="block text-2xl font-extrabold text-white">15+</span>
                        <span class="text-xs text-slate-400">Proyek Selesai</span>
                    </div>
                    <div>
                        <span class="block text-2xl font-extrabold text-indigo-400">4+</span>
                        <span class="text-xs text-slate-400">Kategori Keahlian</span>
                    </div>
                    <div>
                        <span class="block text-2xl font-extrabold text-emerald-400">100%</span>
                        <span class="text-xs text-slate-400">Komitmen Kualitas</span>
                    </div>
                </div>
            </div>

            <!-- Right Visual Card -->
            <div class="lg:col-span-5 relative flex justify-center">
                <div class="relative w-72 h-72 sm:w-80 sm:h-80 lg:w-96 lg:h-96">
                    <div class="absolute inset-0 rounded-3xl bg-gradient-to-tr from-indigo-500 via-purple-500 to-sky-400 rotate-6 opacity-40 blur-xl"></div>
                    <div class="relative w-full h-full rounded-3xl glass-card border border-slate-700/60 p-4 shadow-2xl flex flex-col items-center justify-center text-center overflow-hidden group">
                        <div class="w-32 h-32 sm:w-40 sm:h-40 rounded-full bg-gradient-to-tr from-indigo-600 to-purple-600 p-1 mb-4 shadow-lg shadow-indigo-500/30 group-hover:scale-105 transition-transform duration-500">
                            <img src="{{ asset('images/profile.jpg') }}" alt="Muqsith Mirat Haqqi Profile" class="w-full h-full object-cover object-top rounded-full">
                        </div>
                        <h3 class="text-xl font-bold text-white">Muqsith Mirat Haqqi</h3>
                        <p class="text-xs text-indigo-400 font-medium mb-3">Laravel & AI Specialist</p>

                        <!-- Tech Floating Badges -->
                        <div class="flex flex-wrap justify-center gap-2">
                            <span class="px-2.5 py-1 rounded-md bg-slate-800/90 text-[11px] text-slate-300 border border-slate-700">
                                <i class="devicon-laravel-plain colored mr-1"></i> Laravel
                            </span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-800/90 text-[11px] text-slate-300 border border-slate-700">
                                <i class="devicon-tailwindcss-plain colored mr-1"></i> Tailwind
                            </span>
                            <span class="px-2.5 py-1 rounded-md bg-slate-800/90 text-[11px] text-slate-300 border border-slate-700">
                                <i class="devicon-python-plain colored mr-1"></i> Python
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ABOUT ME SECTION -->
<section id="about" class="py-20 bg-[#070b12] relative border-t border-b border-slate-800/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-xs font-bold uppercase tracking-widest text-indigo-400 mb-2">Tentang Saya</h2>
            <p class="text-3xl sm:text-4xl font-extrabold text-white">Latar Belakang & Passion Pengembangan</p>
            <div class="w-16 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <div class="lg:col-span-6 space-y-6">
                <div class="glass-card p-8 rounded-2xl border border-slate-800">
                    <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
                        <i class="fas fa-user-astronaut text-indigo-400"></i> Biografi Singkat
                    </h3>
                    <p class="text-sm text-slate-300 leading-relaxed mb-4">
                        Saya adalah pengembang perangkat lunak yang berdedikasi menciptakan solusi digital intuitif, bersih, dan efisien. Perjalanan saya di dunia pemrograman berawal dari rasa ingin tahu yang mendalam terhadap arsitektur web dan potensi kecerdasan buatan.
                    </p>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        Fokus utama saya adalah membangun aplikasi web skala penuh (Full-stack Web Applications) menggunakan kerangka kerja Laravel & modern frontend, serta menerapkan prinsip UI/UX teruji demi menghadirkan pengalaman pengguna terbaik.
                    </p>
                </div>
            </div>

            <div class="lg:col-span-6 space-y-4">
                <div class="glass-card p-6 rounded-2xl border border-slate-800 hover:border-indigo-500/40 transition">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-indigo-600/20 flex items-center justify-center text-indigo-400 text-xl font-bold shrink-0">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div>
                            <h4 class="text-base font-bold text-white">Pendidikan & Sertifikasi</h4>
                            <p class="text-xs text-indigo-400 font-medium mt-0.5">S1 Teknik Informatika / Ilmu Komputer</p>
                            <p class="text-xs text-slate-400 mt-2">Mempelajari arsitektur perangkat lunak, struktur data, basis data relasional, jaringan komputer, dan Machine Learning.</p>
                        </div>
                    </div>
                </div>

                <div class="glass-card p-6 rounded-2xl border border-slate-800 hover:border-indigo-500/40 transition">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-purple-600/20 flex items-center justify-center text-purple-400 text-xl font-bold shrink-0">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div>
                            <h4 class="text-base font-bold text-white">Pengalaman & Proyek Profesional</h4>
                            <p class="text-xs text-purple-400 font-medium mt-0.5">Pengembangan Aplikasi Web Enterprise & Portofolio</p>
                            <p class="text-xs text-slate-400 mt-2">Mengembangkan sistem manajemen konten (CMS), e-commerce, integrasi REST API, dan perancangan antarmuka aplikasi interaktif.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- SKILLS SECTION -->
<section id="skills" class="py-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-xs font-bold uppercase tracking-widest text-indigo-400 mb-2">Keahlian Teknis</h2>
            <p class="text-3xl sm:text-4xl font-extrabold text-white">Teknologi & Tools Yang Dikuasai</p>
            <div class="w-16 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($skills as $categoryName => $categorySkills)
                <div class="glass-card p-6 rounded-2xl border border-slate-800 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6 pb-3 border-b border-slate-800">
                            <h3 class="text-lg font-bold text-white">{{ $categoryName }}</h3>
                            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-indigo-950 text-indigo-300 border border-indigo-800">
                                {{ count($categorySkills) }} Skills
                            </span>
                        </div>

                        <div class="space-y-4">
                            @foreach($categorySkills as $skill)
                                <div>
                                    <div class="flex justify-between items-center text-xs font-semibold mb-1.5">
                                        <span class="text-slate-200 flex items-center gap-2">
                                            @if($skill->icon && Str::contains($skill->icon, ['fa-', 'devicon-']))
                                                <i class="{{ $skill->icon }} text-sm"></i>
                                            @else
                                                <i class="fas fa-check-circle text-indigo-400 text-xs"></i>
                                            @endif
                                            {{ $skill->name }}
                                        </span>
                                        <span class="text-indigo-400">{{ $skill->proficiency }}%</span>
                                    </div>
                                    <div class="w-full h-2 bg-slate-800 rounded-full overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full" style="width: {{ $skill->proficiency }}%"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>


<!-- PROJECTS / PORTOFOLIO SECTION WITH ALPINE FILTER & MODAL -->
<section id="projects" class="py-20 bg-[#070b12] relative border-t border-slate-800/60" x-data="{ activeCategory: 'Semua', modalOpen: false, activeProject: {} }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-xs font-bold uppercase tracking-widest text-indigo-400 mb-2">Portofolio</h2>
            <p class="text-3xl sm:text-4xl font-extrabold text-white">Daftar Proyek Unggulan</p>
            <div class="w-16 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <!-- Category Filter Tabs -->
        <div class="flex flex-wrap items-center justify-center gap-2 mb-12">
            <button @click="activeCategory = 'Semua'" 
                    :class="activeCategory === 'Semua' ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-500/30' : 'bg-slate-900 text-slate-400 hover:text-white hover:bg-slate-800 border border-slate-800'"
                    class="px-5 py-2.5 rounded-xl text-xs font-semibold transition-all duration-300">
                Semua Proyek
            </button>
            @foreach($categories as $cat)
                <button @click="activeCategory = '{{ $cat }}'" 
                        :class="activeCategory === '{{ $cat }}' ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-500/30' : 'bg-slate-900 text-slate-400 hover:text-white hover:bg-slate-800 border border-slate-800'"
                        class="px-5 py-2.5 rounded-xl text-xs font-semibold transition-all duration-300">
                    {{ $cat }}
                </button>
            @endforeach
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
                <div x-show="activeCategory === 'Semua' || activeCategory === '{{ $project->category }}'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="glass-card rounded-2xl overflow-hidden border border-slate-800 hover:border-indigo-500/50 transition-all duration-300 flex flex-col group">
                    
                    <!-- Image Thumbnail -->
                    <div class="relative h-48 overflow-hidden bg-slate-900">
                        <img src="{{ $project->image ?? 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80' }}" 
                             alt="{{ $project->title }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md text-indigo-300 text-[11px] font-bold border border-slate-700">
                                {{ $project->category }}
                            </span>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                        <div>
                            <h3 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors line-clamp-1 mb-2">
                                {{ $project->title }}
                            </h3>
                            <p class="text-xs text-slate-400 line-clamp-3 leading-relaxed">
                                {{ $project->description }}
                            </p>
                        </div>

                        <!-- Tech Pills -->
                        @if(!empty($project->technologies))
                            <div class="flex flex-wrap gap-1.5 pt-2">
                                @foreach((array)$project->technologies as $tech)
                                    <span class="px-2 py-0.5 rounded bg-slate-800/80 text-[10px] text-slate-300 border border-slate-700/60">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>
                        @endif

                        <!-- Action Buttons -->
                        <div class="pt-4 border-t border-slate-800/80 flex items-center justify-between">
                            <button @click="activeProject = {
                                        title: '{{ addslashes($project->title) }}',
                                        category: '{{ addslashes($project->category) }}',
                                        description: '{{ addslashes($project->description) }}',
                                        full_description: '{{ addslashes($project->full_description ?? $project->description) }}',
                                        image: '{{ $project->image }}',
                                        github_url: '{{ $project->github_url }}',
                                        demo_url: '{{ $project->demo_url }}',
                                        technologies: {{ json_encode($project->technologies ?? []) }}
                                    }; modalOpen = true" 
                                    class="text-xs font-semibold text-indigo-400 hover:text-indigo-300 flex items-center gap-1">
                                Detail Proyek <i class="fas fa-arrow-right text-[10px]"></i>
                            </button>

                            <div class="flex items-center gap-3">
                                @if($project->github_url)
                                    <a href="{{ $project->github_url }}" target="_blank" class="text-slate-400 hover:text-white text-sm" title="GitHub Source">
                                        <i class="fab fa-github"></i>
                                    </a>
                                @endif
                                @if($project->demo_url)
                                    <a href="{{ $project->demo_url }}" target="_blank" class="text-slate-400 hover:text-indigo-400 text-sm" title="Live Demo">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>

    <!-- DETAIL PROJECT MODAL -->
    <div x-show="modalOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md"
         style="display: none;">
        
        <div @click.away="modalOpen = false" 
             class="glass-card max-w-2xl w-full rounded-2xl border border-slate-700 overflow-hidden shadow-2xl relative max-h-[90vh] flex flex-col">
            
            <button @click="modalOpen = false" class="absolute top-4 right-4 z-10 w-9 h-9 rounded-full bg-slate-900/80 text-slate-300 hover:text-white flex items-center justify-center border border-slate-700">
                <i class="fas fa-times"></i>
            </button>

            <div class="h-64 sm:h-72 w-full bg-slate-900 relative">
                <img :src="activeProject.image || 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80'" :alt="activeProject.title" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-[#111827] via-transparent to-transparent"></div>
            </div>

            <div class="p-6 sm:p-8 space-y-4 overflow-y-auto">
                <div class="flex items-center gap-2">
                    <span class="px-3 py-1 rounded-full bg-indigo-950 text-indigo-300 text-xs font-semibold border border-indigo-800" x-text="activeProject.category"></span>
                </div>

                <h3 class="text-2xl font-bold text-white" x-text="activeProject.title"></h3>

                <p class="text-sm text-slate-300 leading-relaxed" x-text="activeProject.full_description"></p>

                <div>
                    <h4 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Teknologi Digunakan:</h4>
                    <div class="flex flex-wrap gap-2">
                        <template x-for="tech in activeProject.technologies" :key="tech">
                            <span class="px-3 py-1 rounded-md bg-slate-800 text-xs font-medium text-indigo-300 border border-slate-700" x-text="tech"></span>
                        </template>
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-800 flex items-center gap-4">
                    <template x-if="activeProject.demo_url">
                        <a :href="activeProject.demo_url" target="_blank" class="px-5 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-semibold text-xs transition flex items-center gap-2">
                            <i class="fas fa-external-link-alt"></i> Buka Live Demo
                        </a>
                    </template>
                    <template x-if="activeProject.github_url">
                        <a :href="activeProject.github_url" target="_blank" class="px-5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 font-semibold text-xs border border-slate-700 transition flex items-center gap-2">
                            <i class="fab fa-github"></i> Repository GitHub
                        </a>
                    </template>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CONTACT FORM SECTION -->
<section id="contact" class="py-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-xs font-bold uppercase tracking-widest text-indigo-400 mb-2">Kontak</h2>
            <p class="text-3xl sm:text-4xl font-extrabold text-white">Hubungi Saya Hari Ini</p>
            <div class="w-16 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Info -->
            <div class="lg:col-span-5 space-y-6">
                <div class="glass-card p-8 rounded-2xl border border-slate-800 space-y-6">
                    <h3 class="text-xl font-bold text-white mb-2">Mari Berkolaborasi!</h3>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Apakah Anda memiliki ide proyek menarik, membutuhkan konsultasi sistem web, atau ingin mendiskusikan peluang kerja? Silakan kirimkan pesan Anda melalui form ini.
                    </p>

                    <div class="space-y-4 pt-4 border-t border-slate-800">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-indigo-950 border border-indigo-800 flex items-center justify-center text-indigo-400">
                                <i class="fas fa-envelope text-sm"></i>
                            </div>
                            <div>
                                <span class="block text-[11px] font-semibold text-slate-400">Email</span>
                                <a href="mailto:muqsith@example.com" class="text-sm font-bold text-white hover:text-indigo-400 transition">muqsith@example.com</a>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-emerald-950 border border-emerald-800 flex items-center justify-center text-emerald-400">
                                <i class="fab fa-whatsapp text-sm"></i>
                            </div>
                            <div>
                                <span class="block text-[11px] font-semibold text-slate-400">WhatsApp / Phone</span>
                                <a href="https://wa.me/628123456789" target="_blank" class="text-sm font-bold text-white hover:text-emerald-400 transition">+62 812-3456-7890</a>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-purple-950 border border-purple-800 flex items-center justify-center text-purple-400">
                                <i class="fas fa-location-dot text-sm"></i>
                            </div>
                            <div>
                                <span class="block text-[11px] font-semibold text-slate-400">Lokasi</span>
                                <span class="text-sm font-bold text-white">Indonesia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Form -->
            <div class="lg:col-span-7">
                <div class="glass-card p-8 rounded-2xl border border-slate-800">
                    
                    @if(session('success'))
                        <div class="mb-6 p-4 rounded-xl bg-emerald-950/80 border border-emerald-600/50 text-emerald-200 text-xs font-semibold flex items-center gap-3">
                            <i class="fas fa-circle-check text-emerald-400 text-lg"></i>
                            <div>{{ session('success') }}</div>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-xs font-semibold text-slate-300 mb-2">Nama Lengkap <span class="text-rose-500">*</span></label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required 
                                       placeholder="Nama Anda"
                                       class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700/80 text-white placeholder-slate-500 text-xs focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition">
                                @error('name')
                                    <span class="text-rose-400 text-[11px] mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-xs font-semibold text-slate-300 mb-2">Alamat Email <span class="text-rose-500">*</span></label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required 
                                       placeholder="nama@email.com"
                                       class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700/80 text-white placeholder-slate-500 text-xs focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition">
                                @error('email')
                                    <span class="text-rose-400 text-[11px] mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-xs font-semibold text-slate-300 mb-2">Subjek Pesan</label>
                            <input type="text" id="subject" name="subject" value="{{ old('subject') }}" 
                                   placeholder="Judul atau topik pesan"
                                   class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700/80 text-white placeholder-slate-500 text-xs focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition">
                            @error('subject')
                                <span class="text-rose-400 text-[11px] mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-xs font-semibold text-slate-300 mb-2">Pesan Anda <span class="text-rose-500">*</span></label>
                            <textarea id="message" name="message" rows="5" required 
                                      placeholder="Tuliskan pesan atau detail pertanyaan Anda di sini..."
                                      class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700/80 text-white placeholder-slate-500 text-xs focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-rose-400 text-[11px] mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-indigo-600 via-purple-600 to-indigo-600 text-white font-bold text-sm shadow-xl shadow-indigo-600/30 hover:shadow-indigo-600/50 hover:scale-[1.01] active:scale-95 transition-all duration-300">
                            <i class="fas fa-paper-plane mr-2"></i> Kirim Pesan Sekarang
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
