<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | CMS Portofolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="bg-[#090d16] text-slate-100 font-sans min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-slate-900/80 border border-slate-800 rounded-3xl p-8 shadow-2xl backdrop-blur-xl">
        <div class="text-center mb-8">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-indigo-600 to-purple-600 p-0.5 mx-auto mb-4 shadow-lg shadow-indigo-500/30">
                <div class="w-full h-full bg-slate-950 rounded-[14px] flex items-center justify-center font-extrabold text-indigo-400 text-xl">
                    MQ
                </div>
            </div>
            <h1 class="text-2xl font-bold text-white">Login Admin CMS</h1>
            <p class="text-xs text-slate-400 mt-1">Masuk untuk mengelola portofolio & pesan</p>
        </div>

        @if($errors->any())
            <div class="mb-6 p-4 rounded-xl bg-rose-950/80 border border-rose-600/50 text-rose-200 text-xs font-medium">
                <ul class="list-disc list-inside space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label for="email" class="block text-xs font-semibold text-slate-300 mb-2">Email Admin</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-500 text-xs">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" name="email" id="email" value="{{ old('email', 'admin@example.com') }}" required 
                           class="w-full pl-10 pr-4 py-3 rounded-xl bg-slate-950 border border-slate-700/80 text-white text-xs placeholder-slate-500 focus:outline-none focus:border-indigo-500">
                </div>
            </div>

            <div>
                <label for="password" class="block text-xs font-semibold text-slate-300 mb-2">Password</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-500 text-xs">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" name="password" id="password" value="password123" required 
                           class="w-full pl-10 pr-4 py-3 rounded-xl bg-slate-950 border border-slate-700/80 text-white text-xs placeholder-slate-500 focus:outline-none focus:border-indigo-500">
                </div>
            </div>

            <div class="flex items-center justify-between text-xs text-slate-400">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="remember" class="rounded bg-slate-950 border-slate-700 text-indigo-600 focus:ring-0">
                    <span>Ingat Saya</span>
                </label>
            </div>

            <button type="submit" class="w-full py-3.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-bold text-xs shadow-lg shadow-indigo-600/30 transition">
                <i class="fas fa-right-to-bracket mr-2"></i> Masuk Dashboard
            </button>
        </form>

        <div class="mt-8 text-center border-t border-slate-800 pt-4">
            <a href="{{ route('home') }}" class="text-xs text-slate-400 hover:text-indigo-400 transition">
                <i class="fas fa-arrow-left mr-1"></i> Kembali ke Halaman Utama
            </a>
        </div>
    </div>

</body>
</html>
