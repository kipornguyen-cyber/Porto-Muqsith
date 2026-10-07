@extends('layouts.admin')

@section('title', 'Detail Pesan | CMS Portofolio')
@section('page_title', 'Detail Pesan Masuk')

@section('content')

<div class="max-w-2xl bg-slate-900 border border-slate-800 rounded-2xl p-6 sm:p-8 shadow-xl space-y-6">
    <div class="flex items-center justify-between pb-6 border-b border-slate-800">
        <div>
            <span class="text-xs text-slate-400 block mb-1">Diterima pada {{ $message->created_at->format('d F Y, H:i WIB') }}</span>
            <h2 class="text-xl font-bold text-white">{{ $message->subject ?? '(Tanpa Subjek)' }}</h2>
        </div>
        <a href="{{ route('admin.messages.index') }}" class="px-4 py-2 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 text-xs font-semibold">
            <i class="fas fa-arrow-left mr-1"></i> Kembali
        </a>
    </div>

    <div class="space-y-4">
        <div class="grid grid-cols-2 gap-4 text-xs">
            <div class="bg-slate-950 p-4 rounded-xl border border-slate-800">
                <span class="text-slate-500 block mb-1">Nama Pengirim</span>
                <span class="text-sm font-bold text-white">{{ $message->name }}</span>
            </div>
            <div class="bg-slate-950 p-4 rounded-xl border border-slate-800">
                <span class="text-slate-500 block mb-1">Email Pengirim</span>
                <a href="mailto:{{ $message->email }}" class="text-sm font-bold text-indigo-400 hover:underline">{{ $message->email }}</a>
            </div>
        </div>

        <div class="bg-slate-950 p-6 rounded-xl border border-slate-800">
            <span class="text-xs text-slate-500 block mb-3 font-semibold uppercase tracking-wider">Isi Pesan:</span>
            <p class="text-sm text-slate-200 whitespace-pre-line leading-relaxed">{{ $message->message }}</p>
        </div>
    </div>

    <div class="pt-6 border-t border-slate-800 flex items-center justify-between">
        <a href="mailto:{{ $message->email }}?subject=Re: {{ urlencode($message->subject ?? 'Pesan Portofolio') }}" class="px-5 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-bold text-xs shadow-lg transition flex items-center gap-2">
            <i class="fas fa-reply"></i> Balas via Email Client
        </a>

        <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" onsubmit="return confirm('Hapus pesan ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-4 py-2.5 rounded-xl bg-rose-950 text-rose-300 hover:bg-rose-900 border border-rose-900 text-xs font-semibold transition">
                <i class="fas fa-trash mr-1"></i> Hapus Pesan
            </button>
        </form>
    </div>
</div>

@endsection
