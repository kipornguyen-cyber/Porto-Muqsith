@extends('layouts.admin')

@section('title', 'Pesan Masuk | CMS Portofolio')
@section('page_title', 'Kotak Masuk Pesan')

@section('content')

<div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden shadow-xl">
    <div class="p-6 border-b border-slate-800 flex items-center justify-between">
        <h3 class="text-sm font-bold text-white">Daftar Pesan Kontak Masuk</h3>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead class="bg-slate-950/60 text-slate-400 uppercase tracking-wider">
                <tr>
                    <th class="p-4">Status</th>
                    <th class="p-4">Pengirim</th>
                    <th class="p-4">Email</th>
                    <th class="p-4">Subjek</th>
                    <th class="p-4">Diterima Pada</th>
                    <th class="p-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800 text-slate-300">
                @forelse($messages as $msg)
                    <tr class="hover:bg-slate-800/50 transition {{ !$msg->is_read ? 'bg-indigo-950/20' : '' }}">
                        <td class="p-4">
                            @if(!$msg->is_read)
                                <span class="px-2.5 py-1 rounded-full bg-amber-950 text-amber-300 text-[10px] font-bold border border-amber-800">Belum Dibaca</span>
                            @else
                                <span class="px-2.5 py-1 rounded-full bg-slate-800 text-slate-500 text-[10px]">Dibaca</span>
                            @endif
                        </td>
                        <td class="p-4 font-bold text-white">{{ $msg->name }}</td>
                        <td class="p-4">{{ $msg->email }}</td>
                        <td class="p-4 font-medium">{{ $msg->subject ?? '(Tanpa Subjek)' }}</td>
                        <td class="p-4 text-slate-400">{{ $msg->created_at->format('d M Y, H:i') }}</td>
                        <td class="p-4 text-right space-x-2">
                            <a href="{{ route('admin.messages.show', $msg) }}" class="px-3 py-1.5 rounded-lg bg-indigo-600/30 text-indigo-300 hover:bg-indigo-600 hover:text-white transition">
                                <i class="fas fa-eye"></i> Baca
                            </a>
                            <form action="{{ route('admin.messages.destroy', $msg) }}" method="POST" class="inline" onsubmit="return confirm('Hapus pesan ini?')">
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
                        <td colspan="6" class="p-8 text-center text-slate-500">Kotak masuk masih kosong.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($messages->hasPages())
        <div class="p-4 border-t border-slate-800">
            {{ $messages->links() }}
        </div>
    @endif
</div>

@endsection
