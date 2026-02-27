@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-slate-900 py-20 px-6 text-white font-sans overflow-x-hidden">
    <div class="max-w-5xl mx-auto">
        
        <div class="text-center mb-24 relative">
            <div class="absolute -top-10 left-1/2 -translate-x-1/2 opacity-20 blur-3xl w-64 h-64 bg-green-500 rounded-full"></div>
            <h2 class="relative z-10 text-green-400 font-bold tracking-[0.3em] uppercase text-sm mb-4">The Journey</h2>
            <h1 class="relative z-10 text-6xl md:text-7xl font-black tracking-tighter mb-6">
                JEJAK <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-emerald-500">SEJARAH</span>
            </h1>
            <p class="relative z-10 text-slate-400 max-w-2xl mx-auto text-lg leading-relaxed">
                Menelusuri setiap langkah, tantangan, dan pencapaian yang membentuk fondasi keunggulan Program Studi kami hingga hari ini.
            </p>
        </div>

        <div class="relative">
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-green-600/50 via-emerald-400 to-transparent rounded-full hidden md:block"></div>

            <div class="space-y-20">
                
                <div class="relative flex flex-col md:flex-row items-center justify-between group">
                    <div class="md:w-5/12 mb-8 md:mb-0 order-2 md:order-1">
                        <div class="p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-xl transition-all duration-500 group-hover:bg-white/10 group-hover:-translate-x-2 group-hover:border-green-500/50 shadow-2xl">
                            <span class="text-green-400 font-black text-4xl mb-4 block italic">2010</span>
                            <h3 class="text-2xl font-bold mb-3">Peletakan Batu Pertama</h3>
                            <p class="text-slate-400 leading-relaxed">Berawal dari visi luhur untuk mencetak generasi unggul di bidang teknologi, program studi ini resmi mendapatkan izin operasional dengan fokus pada inovasi digital.</p>
                        </div>
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-slate-900 border-4 border-green-500 rounded-full z-10 hidden md:block group-hover:scale-125 transition-transform"></div>
                    <div class="md:w-5/12 order-1 md:order-2"></div>
                </div>

                <div class="relative flex flex-col md:flex-row items-center justify-between group">
                    <div class="md:w-5/12 order-2 md:order-2">
                        <div class="p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-xl transition-all duration-500 group-hover:bg-white/10 group-hover:translate-x-2 group-hover:border-emerald-500/50 shadow-2xl">
                            <span class="text-emerald-400 font-black text-4xl mb-4 block italic">2015</span>
                            <h3 class="text-2xl font-bold mb-3">Ekspansi Fasilitas</h3>
                            <p class="text-slate-400 leading-relaxed">Pembangunan Laboratorium Riset Terpadu dan kerja sama internasional pertama dilakukan, membuka gerbang bagi mahasiswa untuk bersaing di kancah global.</p>
                        </div>
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-slate-900 border-4 border-emerald-500 rounded-full z-10 hidden md:block group-hover:scale-125 transition-transform"></div>
                    <div class="md:w-5/12 order-1 md:order-1"></div>
                </div>

                <div class="relative flex flex-col md:flex-row items-center justify-between group">
                    <div class="md:w-5/12 mb-8 md:mb-0 order-2 md:order-1">
                        <div class="p-8 rounded-3xl bg-gradient-to-br from-green-600/20 to-emerald-600/20 border border-green-500/30 backdrop-blur-xl transition-all duration-500 group-hover:from-green-600/40 group-hover:-translate-x-2 shadow-[0_0_40px_-10px_rgba(34,197,94,0.3)]">
                            <span class="text-white font-black text-4xl mb-4 block italic">2020</span>
                            <h3 class="text-2xl font-bold mb-3">Akreditasi Unggul</h3>
                            <p class="text-slate-300 leading-relaxed">Pencapaian tertinggi dalam standar pendidikan nasional berhasil diraih, mengukuhkan posisi prodi sebagai pionir dalam kurikulum berbasis industri modern.</p>
                        </div>
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-10 h-10 bg-green-500 border-4 border-white rounded-full z-10 hidden md:block animate-pulse"></div>
                    <div class="md:w-5/12 order-1 md:order-2"></div>
                </div>

                <div class="relative flex flex-col md:flex-row items-center justify-between group">
                    <div class="md:w-5/12 order-2 md:order-2">
                        <div class="p-8 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-xl transition-all duration-500 group-hover:bg-white/10 group-hover:translate-x-2 shadow-2xl">
                            <span class="text-green-400 font-black text-4xl mb-4 block italic">Now</span>
                            <h3 class="text-2xl font-bold mb-3">Inovasi Tanpa Batas</h3>
                            <p class="text-slate-400 leading-relaxed">Berfokus pada pengembangan AI dan keberlanjutan digital untuk menjawab tantangan masa depan yang semakin kompleks.</p>
                        </div>
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-slate-900 border-4 border-green-500 rounded-full z-10 hidden md:block group-hover:scale-125 transition-transform"></div>
                    <div class="md:w-5/12 order-1 md:order-1"></div>
                </div>

            </div>
        </div>

        <div class="mt-32 text-center">
            <a href="#" class="inline-flex items-center gap-3 bg-gradient-to-r from-green-600 to-emerald-500 px-8 py-4 rounded-full font-bold text-lg hover:shadow-[0_0_30px_-5px_rgba(34,197,94,0.6)] transition-all active:scale-95">
                Lihat Struktur Organisasi <i class="fas fa-arrow-right"></i>
            </a>
        </div>

    </div>
</div>
@endsection