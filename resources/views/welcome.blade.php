<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPK Guru - SAW</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-950 text-white overflow-x-hidden">

    {{-- HEADER --}}
    <header class="absolute top-0 left-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">
            <h1 class="text-2xl font-bold tracking-wide text-cyan-400">
                SPK GURU
            </h1>

            <div class="space-x-3">
                @auth
                    <a href="{{ url('/dashboard') }}"
                       class="px-5 py-2 bg-cyan-500 hover:bg-cyan-400 rounded-xl font-semibold transition">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                       class="px-5 py-2 bg-white/10 hover:bg-white/20 rounded-xl transition">
                        Login
                    </a>

                    <!-- @if(Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="px-5 py-2 bg-cyan-500 hover:bg-cyan-400 rounded-xl font-semibold transition">
                        Register
                    </a>
                    @endif -->
                @endauth
            </div>
        </div>
    </header>


    {{-- HERO --}}
    <section class="min-h-screen flex items-center relative">

        {{-- Background Blur --}}
        <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/20 via-blue-500/10 to-purple-500/20"></div>

        <div class="absolute top-20 left-20 w-72 h-72 bg-cyan-500/30 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-20 right-20 w-72 h-72 bg-purple-500/30 blur-[120px] rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

            {{-- KIRI --}}
            <div>
                <span class="px-4 py-2 bg-cyan-500/20 text-cyan-300 rounded-full text-sm">
                    Sistem Pendukung Keputusan
                </span>

                <h2 class="text-5xl md:text-6xl font-bold leading-tight mt-6">
                    Pemilihan <span class="text-cyan-400">Guru Terbaik</span>
                    dengan Metode SAW
                </h2>

                <p class="mt-6 text-slate-300 text-lg leading-relaxed">
                   Sistem Pendukung Keputusan berbasis web menggunakan metode SAW (Simple Additive Weighting) untuk membantu proses penilaian guru secara objektif, cepat, akurat, dan transparan.
                </p>

                <div class="mt-8 flex gap-4 flex-wrap">
                    <a href="{{ route('login') }}"
                       class="px-6 py-3 bg-cyan-500 hover:bg-cyan-400 rounded-xl font-semibold shadow-lg shadow-cyan-500/30 transition">
                        Mulai Sekarang
                    </a>

                    <a href="#fitur"
                       class="px-6 py-3 border border-white/20 hover:bg-white/10 rounded-xl transition">
                        Lihat Fitur
                    </a>
                </div>
            </div>


            {{-- KANAN --}}
            <div class="relative">
                <div class="bg-white/10 backdrop-blur-xl border border-white/10 rounded-3xl p-8 shadow-2xl">

                    <h3 class="text-2xl font-bold mb-6 text-cyan-300">
                        Dashboard Preview
                    </h3>

                    <div class="space-y-4">

                        <div class="bg-slate-900/70 rounded-xl p-4 flex justify-between">
                            <span>Total Guru</span>
                            <span class="font-bold text-cyan-400">25</span>
                        </div>

                        <div class="bg-slate-900/70 rounded-xl p-4 flex justify-between">
                            <span>Total Kriteria</span>
                            <span class="font-bold text-cyan-400">5</span>
                        </div>

                        <div class="bg-slate-900/70 rounded-xl p-4 flex justify-between">
                            <span>Perhitungan SAW</span>
                            <span class="font-bold text-green-400">Ready</span>
                        </div>

                        <div class="bg-slate-900/70 rounded-xl p-4 flex justify-between">
                            <span>Ranking Guru</span>
                            <span class="font-bold text-yellow-400">Live</span>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>


    {{-- FITUR --}}
    <section id="fitur" class="py-24 bg-slate-900">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold">
                    Fitur Unggulan
                </h3>
                <p class="text-slate-400 mt-4">
                    Dirancang modern, cepat dan mudah digunakan.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">

                <div class="bg-white/5 p-8 rounded-2xl border border-white/10 hover:-translate-y-2 transition">
                    <h4 class="text-xl font-bold text-cyan-400 mb-3">Data Guru</h4>
                    <p class="text-slate-300">
                        Kelola master data guru lengkap dan rapi.
                    </p>
                </div>

                <div class="bg-white/5 p-8 rounded-2xl border border-white/10 hover:-translate-y-2 transition">
                    <h4 class="text-xl font-bold text-cyan-400 mb-3">Perhitungan SAW</h4>
                    <p class="text-slate-300">
                        Normalisasi, matriks keputusan dan ranking otomatis.
                    </p>
                </div>

                <div class="bg-white/5 p-8 rounded-2xl border border-white/10 hover:-translate-y-2 transition">
                    <h4 class="text-xl font-bold text-cyan-400 mb-3">Laporan</h4>
                    <p class="text-slate-300">
                        Cetak laporan hasil penilaian guru terbaik.
                    </p>
                </div>

            </div>
        </div>
    </section>


    {{-- FOOTER --}}
    <footer class="py-8 text-center text-slate-400 border-t border-white/10">
        © {{ date('Y') }} Sistem Penunjang Keputusan - SAW
    </footer>

</body>
</html>