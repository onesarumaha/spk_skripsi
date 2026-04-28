<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SPK Guru</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'Plus Jakarta Sans',sans-serif;
        }

        .glass{
            background: rgba(255,255,255,0.12);
            backdrop-filter: blur(14px);
            border:1px solid rgba(255,255,255,0.1);
        }
    </style>
</head>

<body class="bg-[#0f172a] text-slate-200">

<div class="flex min-h-screen">

    {{-- LEFT SIDE --}}
    <div class="hidden lg:flex lg:w-1/2 flex-col justify-between p-12 bg-cover bg-center relative"
         style="background-image: url('https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?ixlib=rb-4.0.3&auto=format&fit=crop&w=1064&q=80');">

        <div class="absolute inset-0 bg-indigo-900/50"></div>

        <div class="relative z-10">
            <div class="flex items-center gap-3 text-white font-bold text-2xl">
                <div class="w-10 h-10 bg-indigo-500 rounded-xl flex items-center justify-center shadow-lg">
                    G
                </div>
                <span>SPK GURU</span>
            </div>
        </div>

        <div class="relative z-10">
            <h1 class="text-5xl font-extrabold text-white leading-tight mb-4">
                Sistem Penilaian <br>Guru Terbaik
            </h1>

            <p class="text-indigo-100 text-lg max-w-md">
                Kelola penilaian guru menggunakan metode SAW dengan sistem modern dan profesional.
            </p>
        </div>

        <div class="relative z-10 text-sm text-indigo-200">
            © {{ date('Y') }} Sistem Penunjang Keputusan
        </div>
    </div>

    {{-- RIGHT SIDE --}}
    <div class="w-full lg:w-1/2 flex items-center justify-center px-8 py-12">

        <div class="w-full max-w-md">

            <div class="mb-10">
                <h2 class="text-3xl font-bold text-white mb-2">
                    Selamat Datang
                </h2>
                <p class="text-slate-400">
                    Silahkan login ke akun Anda.
                </p>
            </div>

            {{-- STATUS --}}
            @if (session('status'))
                <div class="mb-4 text-green-400 text-sm">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                {{-- EMAIL --}}
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-2">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        class="w-full px-4 py-3 rounded-xl bg-slate-800/70 border border-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="nama@email.com">

                    @error('email')
                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                {{-- PASSWORD --}}
                <div>
                    <div class="flex justify-between mb-2">
                        <label class="text-sm font-medium text-slate-300">
                            Password
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                               class="text-sm text-indigo-400 hover:text-indigo-300">
                                Lupa password?
                            </a>
                        @endif
                    </div>

                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full px-4 py-3 rounded-xl bg-slate-800/70 border border-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="••••••••">

                    @error('password')
                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                {{-- REMEMBER --}}
                <div class="flex items-center">
                    <input type="checkbox"
                           name="remember"
                           id="remember"
                           class="rounded border-slate-700 bg-slate-800 text-indigo-500">

                    <label for="remember" class="ml-2 text-sm text-slate-400">
                        Ingat saya
                    </label>
                </div>

                {{-- BUTTON --}}
                <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-3 rounded-xl shadow-lg transition duration-200">
                    Login Sekarang
                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>