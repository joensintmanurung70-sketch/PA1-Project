@extends('layouts.app') 

@section('content')
<div class="min-h-screen py-20 px-6">
    <div class="max-w-6xl mx-auto">
        
        <div class="text-center mb-20 space-y-4">
            <h2 class="text-green-600 font-bold tracking-widest uppercase text-sm">Tentang Kami</h2>
            <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 leading-tight">
                Membangun Masa Depan <br/> 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-emerald-400">
                    Dengan Integritas
                </span>
            </h1>
            <div class="h-1.5 w-24 bg-green-600 mx-auto rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-stretch">
            
            <div class="group relative p-10 rounded-3xl bg-white border border-slate-200 shadow-xl overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
                <div class="absolute top-0 right-0 p-8 opacity-10 group-hover:scale-110 transition-transform duration-500">
                    <i class="fas fa-eye text-9xl text-green-600"></i>
                </div>
                
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-green-100 rounded-2xl flex items-center justify-center mb-6 text-green-600">
                        <i class="fas fa-lightbulb text-2xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-slate-800 mb-6">Visi Kami</h3>
                    <p class="text-xl text-slate-600 leading-relaxed italic">
                        "Menjadi institusi terdepan yang menginspirasi perubahan global melalui inovasi berkelanjutan dan pemberdayaan masyarakat yang inklusif."
                    </p>
                </div>
            </div>

            <div class="group p-10 rounded-3xl bg-gradient-to-br from-green-600 to-emerald-700 shadow-xl text-white transition-all duration-500 hover:-translate-y-2">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center">
                        <i class="fas fa-rocket text-xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold">Misi Utama</h3>
                </div>

                <ul class="space-y-6">
                    <li class="flex items-start gap-4 group/item">
                        <span class="flex-shrink-0 w-8 h-8 rounded-full bg-white/10 flex items-center justify-center font-bold text-sm border border-white/20 group-hover/item:bg-white group-hover/item:text-green-600 transition-colors">01</span>
                        <p class="text-emerald-50 leading-snug pt-1">Mengintegrasikan teknologi mutakhir dalam setiap aspek layanan untuk efisiensi maksimal.</p>
                    </li>
                    <li class="flex items-start gap-4 group/item">
                        <span class="flex-shrink-0 w-8 h-8 rounded-full bg-white/10 flex items-center justify-center font-bold text-sm border border-white/20 group-hover/item:bg-white group-hover/item:text-green-600 transition-colors">02</span>
                        <p class="text-emerald-50 leading-snug pt-1">Membangun ekosistem kolaboratif yang mendukung pertumbuhan bakat dan kreativitas tanpa batas.</p>
                    </li>
                    <li class="flex items-start gap-4 group/item">
                        <span class="flex-shrink-0 w-8 h-8 rounded-full bg-white/10 flex items-center justify-center font-bold text-sm border border-white/20 group-hover/item:bg-white group-hover/item:text-green-600 transition-colors">03</span>
                        <p class="text-emerald-50 leading-snug pt-1">Menjaga standar etika tertinggi dan transparansi dalam seluruh tata kelola organisasi.</p>
                    </li>
                </ul>
            </div>

        </div>

        <div class="mt-20 flex flex-wrap justify-center gap-8 text-slate-400">
            <span class="flex items-center gap-2 transition-colors hover:text-green-600 cursor-default">
                <i class="fas fa-check-circle text-green-500"></i> Inovatif
            </span>
            <span class="flex items-center gap-2 transition-colors hover:text-green-600 cursor-default">
                <i class="fas fa-check-circle text-green-500"></i> Profesional
            </span>
            <span class="flex items-center gap-2 transition-colors hover:text-green-600 cursor-default">
                <i class="fas fa-check-circle text-green-500"></i> Akuntabel
            </span>
        </div>
    </div>
</div>
@endsection