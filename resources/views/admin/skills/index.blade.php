@extends('layouts.admin')

@section('title', 'Kelola Keahlian | CMS Portofolio')
@section('page_title', 'Manajemen Keahlian & Tech Stack')

@section('content')

<div class="flex items-center justify-between mb-6">
    <p class="text-xs text-slate-400">Daftar semua keahlian/skills yang ditampilkan di website.</p>
    <a href="{{ route('admin.skills.create') }}" class="px-4 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-bold text-xs shadow-lg shadow-indigo-600/30 transition flex items-center gap-2">
        <i class="fas fa-plus"></i> Tambah Keahlian
    </a>
</div>

<div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden shadow-xl">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead class="bg-slate-950/60 text-slate-400 uppercase tracking-wider">
                <tr>
                    <th class="p-4">Nama Skill</th>
                    <th class="p-4">Kategori</th>
                    <th class="p-4 text-center">Tingkat Penguasaan</th>
                    <th class="p-4 text-center">Status</th>
                    <th class="p-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800 text-slate-300">
                @forelse($skills as $skill)
                    <tr class="hover:bg-slate-800/50 transition">
                        <td class="p-4 font-bold text-white flex items-center gap-2">
                            @if($skill->icon)
                                <i class="{{ $skill->icon }} text-base text-indigo-400"></i>
                            @endif
                            {{ $skill->name }}
                        </td>
                        <td class="p-4 font-semibold text-indigo-400">{{ $skill->category }}</td>
                        <td class="p-4 text-center">
                            <div class="inline-flex items-center gap-2">
                                <div class="w-24 h-2 bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-indigo-500" style="width: {{ $skill->proficiency }}%"></div>
                                </div>
                                <span class="font-bold text-slate-200">{{ $skill->proficiency }}%</span>
                            </div>
                        </td>
                        <td class="p-4 text-center">
                            @if($skill->is_active)
                                <span class="px-2.5 py-1 rounded-full bg-emerald-950 text-emerald-400 text-[10px] font-bold border border-emerald-800">Aktif</span>
                            @else
                                <span class="px-2.5 py-1 rounded-full bg-slate-800 text-slate-500 text-[10px]">Non-Aktif</span>
                            @endif
                        </td>
                        <td class="p-4 text-right space-x-2">
                            <a href="{{ route('admin.skills.edit', $skill) }}" class="px-3 py-1.5 rounded-lg bg-amber-600/20 text-amber-300 hover:bg-amber-600 hover:text-white transition">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" class="inline" onsubmit="return confirm('Hapus keahlian ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1.5 rounded-lg bg-rose-600/20 text-rose-300 hover:bg-rose-600 hover:text-white transition">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-8 text-center text-slate-500">Belum ada keahlian ditambahkan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
