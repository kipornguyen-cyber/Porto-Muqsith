@extends('layouts.admin')

@section('title', 'Dashboard Admin | CMS Portofolio')
@section('page_title', 'Ringkasan Dashboard CMS')

@section('content')

<!-- Stat Cards Grid -->
<div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
    <div class="bg-slate-900 border border-slate-800 p-6 rounded-2xl flex items-center justify-between">
        <div>
            <span class="block text-xs font-semibold text-slate-400 mb-1">Total Proyek</span>
            <span class="text-3xl font-extrabold text-white">{{ $totalProjects }}</span>
        </div>
        <div class="w-12 h-12 rounded-xl bg-indigo-600/20 text-indigo-400 flex items-center justify-center text-xl">
            <i class="fas fa-briefcase"></i>
        </div>
    </div>

    <div class="bg-slate-900 border border-slate-800 p-6 rounded-2xl flex items-center justify-between">
        <div>
            <span class="block text-xs font-semibold text-slate-400 mb-1">Total Keahlian</span>
            <span class="text-3xl font-extrabold text-white">{{ $totalSkills }}</span>
        </div>
        <div class="w-12 h-12 rounded-xl bg-purple-600/20 text-purple-400 flex items-center justify-center text-xl">
            <i class="fas fa-layer-group"></i>
        </div>
    </div>

    <div class="bg-slate-900 border border-slate-800 p-6 rounded-2xl flex items-center justify-between">
        <div>
            <span class="block text-xs font-semibold text-slate-400 mb-1">Pesan Belum Dibaca</span>
            <span class="text-3xl font-extrabold text-amber-400">{{ $unreadMessages }}</span>
        </div>
        <div class="w-12 h-12 rounded-xl bg-amber-600/20 text-amber-400 flex items-center justify-center text-xl">
            <i class="fas fa-envelope"></i>
        </div>
    </div>
</div>

<!-- Recent Messages Table -->
<div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden shadow-xl">
    <div class="p-6 border-b border-slate-800 flex items-center justify-between">
        <h3 class="text-base font-bold text-white flex items-center gap-2">
            <i class="fas fa-paper-plane text-indigo-400"></i> Pesan Masuk Terbaru
        </h3>
        <a href="{{ route('admin.messages.index') }}" class="text-xs text-indigo-400 hover:text-indigo-300 font-semibold">
            Lihat Semua Pesan <i class="fas fa-arrow-right ml-1"></i>
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead class="bg-slate-950/60 text-slate-400 uppercase tracking-wider">
                <tr>
                    <th class="p-4">Pengirim</th>
                    <th class="p-4">Email</th>
                    <th class="p-4">Subjek</th>
                    <th class="p-4">Tanggal</th>
                    <th class="p-4 text-center">Status</th>
                    <th class="p-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800 text-slate-300">
                @forelse($latestMessages as $msg)
                    <tr class="hover:bg-slate-800/50 transition">
                        <td class="p-4 font-bold text-white">{{ $msg->name }}</td>
                        <td class="p-4">{{ $msg->email }}</td>
                        <td class="p-4 font-medium">{{ $msg->subject ?? 'Tanpa Subjek' }}</td>
                        <td class="p-4 text-slate-400">{{ $msg->created_at->diffForHumans() }}</td>
                        <td class="p-4 text-center">
                            @if(!$msg->is_read)
                                <span class="px-2.5 py-1 rounded-full bg-amber-950 text-amber-300 text-[10px] font-bold border border-amber-800">Baru</span>
                            @else
                                <span class="px-2.5 py-1 rounded-full bg-slate-800 text-slate-400 text-[10px]">Dibaca</span>
                            @endif
                        </td>
                        <td class="p-4 text-right">
                            <a href="{{ route('admin.messages.show', $msg) }}" class="px-3 py-1.5 rounded-lg bg-indigo-600/30 text-indigo-300 hover:bg-indigo-600 hover:text-white transition">
                                Baca Detail
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="p-8 text-center text-slate-500">Belum ada pesan masuk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
