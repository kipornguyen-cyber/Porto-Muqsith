@extends('layouts.admin')

@section('title', 'Tambah Proyek | CMS Portofolio')
@section('page_title', 'Tambah Proyek Baru')

@section('content')

<div class="max-w-3xl bg-slate-900 border border-slate-800 rounded-2xl p-6 sm:p-8 shadow-xl">
    <form action="{{ route('admin.projects.store') }}" method="POST" class="space-y-6">
        @csrf
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div>
                <label for="title" class="block text-xs font-semibold text-slate-300 mb-2">Judul Proyek <span class="text-rose-500">*</span></label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" required placeholder="Contoh: Website E-Commerce Laravel" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700 text-white text-xs focus:border-indigo-500">
                @error('title') <span class="text-rose-400 text-[11px] mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="category" class="block text-xs font-semibold text-slate-300 mb-2">Kategori Proyek <span class="text-rose-500">*</span></label>
                <input type="text" id="category" name="category" value="{{ old('category') }}" required placeholder="Contoh: Web Dev, UI/UX, Machine Learning" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700 text-white text-xs focus:border-indigo-500">
                @error('category') <span class="text-rose-400 text-[11px] mt-1 block">{{ $message }}</span> @enderror
            </div>
        </div>

        <div>
            <label for="description" class="block text-xs font-semibold text-slate-300 mb-2">Deskripsi Singkat (Ringkasan Card) <span class="text-rose-500">*</span></label>
            <textarea id="description" name="description" rows="3" required placeholder="Ringkasan 2-3 kalimat untuk tampilan card" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700 text-white text-xs focus:border-indigo-500">{{ old('description') }}</textarea>
            @error('description') <span class="text-rose-400 text-[11px] mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="full_description" class="block text-xs font-semibold text-slate-300 mb-2">Deskripsi Lengkap (Untuk Modal Detail)</label>
            <textarea id="full_description" name="full_description" rows="5" placeholder="Penjelasan lengkap mengenai arsitektur, latar belakang, dan fitur proyek" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700 text-white text-xs focus:border-indigo-500">{{ old('full_description') }}</textarea>
            @error('full_description') <span class="text-rose-400 text-[11px] mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="technologies" class="block text-xs font-semibold text-slate-300 mb-2">Teknologi Digunakan (Pisahkan dengan Koma)</label>
            <input type="text" id="technologies" name="technologies" value="{{ old('technologies') }}" placeholder="Laravel, Tailwind CSS, Vue.js, MySQL" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700 text-white text-xs focus:border-indigo-500">
            @error('technologies') <span class="text-rose-400 text-[11px] mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="image" class="block text-xs font-semibold text-slate-300 mb-2">URL Gambar / Screenshot Proyek</label>
            <input type="url" id="image" name="image" value="{{ old('image') }}" placeholder="https://images.unsplash.com/photo-..." class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700 text-white text-xs focus:border-indigo-500">
            @error('image') <span class="text-rose-400 text-[11px] mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div>
                <label for="github_url" class="block text-xs font-semibold text-slate-300 mb-2">Link GitHub Repository</label>
                <input type="url" id="github_url" name="github_url" value="{{ old('github_url') }}" placeholder="https://github.com/username/repo" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700 text-white text-xs focus:border-indigo-500">
            </div>

            <div>
                <label for="demo_url" class="block text-xs font-semibold text-slate-300 mb-2">Link Live Demo Website</label>
                <input type="url" id="demo_url" name="demo_url" value="{{ old('demo_url') }}" placeholder="https://demo-app.example.com" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700 text-white text-xs focus:border-indigo-500">
            </div>
        </div>

        <div class="flex items-center gap-2 pt-2">
            <input type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }} class="rounded bg-slate-950 border-slate-700 text-indigo-600">
            <label for="is_featured" class="text-xs font-medium text-slate-300">Tampilkan sebagai Proyek Unggulan (Featured)</label>
        </div>

        <div class="pt-4 border-t border-slate-800 flex items-center justify-between">
            <a href="{{ route('admin.projects.index') }}" class="text-xs text-slate-400 hover:text-white">Batal</a>
            <button type="submit" class="px-6 py-3 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-bold text-xs shadow-lg transition">Simpan Proyek</button>
        </div>
    </form>
</div>

@endsection
