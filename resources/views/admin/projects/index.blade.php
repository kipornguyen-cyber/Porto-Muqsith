@extends('layouts.admin')

@section('title', 'Kelola Proyek | CMS Portofolio')
@section('page_title', 'Manajemen Proyek Portofolio')

@section('content')

<div class="flex items-center justify-between mb-6">
    <p class="text-xs text-slate-400">Daftar semua proyek yang tampil pada halaman portofolio public.</p>
    <a href="{{ route('admin.projects.create') }}" class="px-4 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-bold text-xs shadow-lg shadow-indigo-600/30 transition flex items-center gap-2">
        <i class="fas fa-plus"></i> Tambah Proyek Baru
    </a>
</div>

<div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden shadow-xl">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead class="bg-slate-950/60 text-slate-400 uppercase tracking-wider">
                <tr>
                    <th class="p-4">Proyek</th>
                    <th class="p-4">Kategori</th>
                    <th class="p-4">Teknologi</th>
                    <th class="p-4 text-center">Featured</th>
                    <th class="p-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800 text-slate-300">
                @forelse($projects as $project)
                    <tr class="hover:bg-slate-800/50 transition">
                        <td class="p-4">
                            <div class="flex items-center gap-3">
                                <img src="{{ $project->image ?? 'https://via.placeholder.com/80' }}" class="w-12 h-12 rounded-lg object-cover bg-slate-950 shrink-0">
                                <div>
                                    <span class="block font-bold text-white text-sm">{{ $project->title }}</span>
                                    <span class="text-slate-500 text-[11px]">{{ $project->slug }}</span>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 font-semibold text-indigo-400">{{ $project->category }}</td>
                        <td class="p-4">
                            <div class="flex flex-wrap gap-1">
                                @foreach((array)$project->technologies as $t)
                                    <span class="px-2 py-0.5 rounded bg-slate-800 text-[10px] text-slate-300">{{ $t }}</span>
                                @endforeach
                            </div>
                        </td>
                        <td class="p-4 text-center">
                            @if($project->is_featured)
                                <span class="px-2.5 py-1 rounded-full bg-emerald-950 text-emerald-400 text-[10px] font-bold border border-emerald-800">Ya</span>
                            @else
                                <span class="px-2.5 py-1 rounded-full bg-slate-800 text-slate-500 text-[10px]">Tidak</span>
                            @endif
                        </td>
                        <td class="p-4 text-right space-x-2">
                            <a href="{{ route('admin.projects.edit', $project) }}" class="px-3 py-1.5 rounded-lg bg-amber-600/20 text-amber-300 hover:bg-amber-600 hover:text-white transition">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus proyek ini?')">
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
                        <td colspan="5" class="p-8 text-center text-slate-500">Belum ada proyek ditambahkan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($projects->hasPages())
        <div class="p-4 border-t border-slate-800">
            {{ $projects->links() }}
        </div>
    @endif
</div>

@endsection
