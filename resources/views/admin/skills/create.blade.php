@extends('layouts.admin')

@section('title', 'Tambah Keahlian | CMS Portofolio')
@section('page_title', 'Tambah Keahlian Baru')

@section('content')

<div class="max-w-xl bg-slate-900 border border-slate-800 rounded-2xl p-6 sm:p-8 shadow-xl">
    <form action="{{ route('admin.skills.store') }}" method="POST" class="space-y-6">
        @csrf
        
        <div>
            <label for="name" class="block text-xs font-semibold text-slate-300 mb-2">Nama Keahlian <span class="text-rose-500">*</span></label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="Contoh: Laravel / PHP, Python" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700 text-white text-xs focus:border-indigo-500">
            @error('name') <span class="text-rose-400 text-[11px] mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="category" class="block text-xs font-semibold text-slate-300 mb-2">Kategori Keahlian <span class="text-rose-500">*</span></label>
            <input type="text" id="category" name="category" value="{{ old('category') }}" required placeholder="Contoh: Web Dev, UI/UX, Machine Learning" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700 text-white text-xs focus:border-indigo-500">
            @error('category') <span class="text-rose-400 text-[11px] mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="proficiency" class="block text-xs font-semibold text-slate-300 mb-2">Tingkat Penguasaan (1 - 100%) <span class="text-rose-500">*</span></label>
            <input type="number" id="proficiency" name="proficiency" value="{{ old('proficiency', 85) }}" min="1" max="100" required class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700 text-white text-xs focus:border-indigo-500">
            @error('proficiency') <span class="text-rose-400 text-[11px] mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="icon" class="block text-xs font-semibold text-slate-300 mb-2">Class Icon (FontAwesome / Devicon)</label>
            <input type="text" id="icon" name="icon" value="{{ old('icon') }}" placeholder="Contoh: devicon-laravel-plain colored atau fas fa-code" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-700 text-white text-xs focus:border-indigo-500">
        </div>

        <div class="flex items-center gap-2 pt-2">
            <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} class="rounded bg-slate-950 border-slate-700 text-indigo-600">
            <label for="is_active" class="text-xs font-medium text-slate-300">Tampilkan pada website public</label>
        </div>

        <div class="pt-4 border-t border-slate-800 flex items-center justify-between">
            <a href="{{ route('admin.skills.index') }}" class="text-xs text-slate-400 hover:text-white">Batal</a>
            <button type="submit" class="px-6 py-3 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-bold text-xs shadow-lg transition">Simpan Keahlian</button>
        </div>
    </form>
</div>

@endsection
