<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bioproses App - Masa Depan Hayati</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-900">

    <nav class="fixed w-full z-50 transition-all duration-300 bg-white/70 backdrop-blur-md border-b border-white/20">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-emerald-600 rounded-lg flex items-center justify-center text-white font-bold">B</div>
                <span class="text-xl font-extrabold tracking-tight text-emerald-900">BIOPROSES<span class="text-emerald-500">APP</span></span>
            </div>
            <div class="hidden md:flex gap-8 font-semibold text-slate-600">
                <a href="#" class="hover:text-emerald-600 transition-colors">Beranda</a>
                <a href="#" class="hover:text-emerald-600 transition-colors">Kurikulum</a>
                <a href="#" class="hover:text-emerald-600 transition-colors">Laboratorium</a>
                <a href="#" class="hover:text-emerald-600 transition-colors">Kontak</a>
            </div>
            <button class="bg-emerald-600 text-white px-6 py-2 rounded-full font-bold hover:bg-emerald-700 transition-all shadow-md shadow-emerald-200">Login</button>
        </div>
    </nav>

    <header class="relative min-h-screen flex items-center pt-20 overflow-hidden bg-[#064e3b]">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-emerald-500/20 blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-green-400/10 blur-[120px]"></div>

        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center z-10">
            <div>
                <span class="inline-block px-4 py-2 bg-emerald-500/20 text-emerald-300 rounded-full text-sm font-bold mb-6 border border-emerald-500/30">
                    🌱 Inovasi Teknologi Berkelanjutan
                </span>
                <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-[1.1] mb-6">
                    Masa Depan Industri <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-green-200">
                        Berbasis Hayati
                    </span>
                </h1>
                <p class="text-emerald-100/70 text-lg md:text-xl mb-10 leading-relaxed max-w-lg">
                    Pelajari rekayasa proses biologis untuk menciptakan solusi industri yang ramah lingkungan dan bernilai tinggi.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#program" class="px-8 py-4 bg-emerald-500 hover:bg-emerald-400 text-[#064e3b] font-extrabold rounded-2xl transition-all shadow-xl shadow-emerald-900/20 transform hover:-translate-y-1">
                        Jelajahi Program
                    </a>
                    <a href="#" class="px-8 py-4 border-2 border-emerald-500/30 hover:border-emerald-500 text-white font-bold rounded-2xl transition-all backdrop-blur-sm">
                        Pendaftaran
                    </a>
                </div>
            </div>
            <div class="hidden md:block relative">
                <div class="relative w-full h-[500px] rounded-[40px] overflow-hidden border border-white/10 shadow-2xl shadow-black/50">
                    <img src="https://images.unsplash.com/photo-1576086213369-97a306d36557?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Bioprocess Lab" class="object-cover w-full h-full opacity-80 group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#064e3b] via-transparent to-transparent"></div>
                </div>
            </div>
        </div>
    </header>

    <section id="program" class="py-24 relative -mt-16 z-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="glass-card p-10 rounded-[32px] shadow-xl hover:shadow-2xl hover:shadow-emerald-500/10 transition-all duration-500 group">
                    <div class="w-16 h-16 bg-emerald-100 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-emerald-600 group-hover:rotate-12 transition-all">
                        <svg class="w-8 h-8 text-emerald-600 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.628.288a11.047 11.047 0 01-9.874-9.435a2 2 0 011.897-2.132l1.246-.08a2 2 0 011.69.839l.714 1.071a2 2 0 01.313 1.057l-.366 2.558a2 2 0 00.511 1.585l7.91 8.353a2 2 0 01.39 1.438l-.163 1.348a2 2 0 01-2.132 1.742l-1.066-.08a2 2 0 01-1.423-.748l-.744-1.116z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4">Rekayasa Bioproses</h3>
                    <p class="text-slate-500 leading-relaxed">Produksi skala industri obat-obatan, biofuel, dan makanan menggunakan sistem hayati yang optimal.</p>
                </div>

                <div class="glass-card p-10 rounded-[32px] shadow-xl hover:shadow-2xl hover:shadow-emerald-500/10 transition-all duration-500 group">
                    <div class="w-16 h-16 bg-emerald-100 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-emerald-600 group-hover:rotate-12 transition-all">
                        <svg class="w-8 h-8 text-emerald-600 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4">Teknologi Enzim</h3>
                    <p class="text-slate-500 leading-relaxed">Optimasi penggunaan katalis biologi dalam transformasi materi untuk efisiensi energi yang lebih baik.</p>
                </div>

                <div class="glass-card p-10 rounded-[32px] shadow-xl hover:shadow-2xl hover:shadow-emerald-500/10 transition-all duration-500 group">
                    <div class="w-16 h-16 bg-emerald-100 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-emerald-600 group-hover:rotate-12 transition-all">
                        <svg class="w-8 h-8 text-emerald-600 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4">Keberlanjutan</h3>
                    <p class="text-slate-500 leading-relaxed">Fokus pada ekonomi sirkular dan pengurangan limbah melalui sistem biorefineri yang cerdas.</p>
                </div>

            </div>
        </div>
    </section>

</body>
</html>