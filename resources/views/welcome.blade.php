<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Teknologi Bioproses | Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
=======
    <title>Bioproses IT DEL | Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Animasi halus untuk dropdown mega menu */
        .mega-menu {
            display: none;
            animation: fadeIn 0.3s ease-out;
        }
        .group:hover .mega-menu {
            display: block;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .nav-link-wrapper {
            height: 100%;
            display: flex;
            align-items: center;
        }
    </style>
>>>>>>> fccdaef076b55d3c0d01ee51ca715e53617b2cb2
</head>
<body class="bg-gray-50 font-sans text-gray-900">

    <nav class="bg-white shadow-md sticky top-0 z-50">
<<<<<<< HEAD
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-2">
                    <i class="fas fa-microscope text-green-600 text-2xl"></i>
                    <span class="font-bold text-xl tracking-tight">BIOPROSES <span class="text-green-600">APP</span></span>
                </div>
                <div class="hidden md:flex space-x-8 font-medium">
                    <a href="#" class="text-green-600 border-b-2 border-green-600">Beranda</a>
                    <a href="#" class="hover:text-green-600 transition">Kurikulum</a>
                    <a href="#" class="hover:text-green-600 transition">Laboratorium</a>
                    <a href="#" class="hover:text-green-600 transition">Kontak</a>
=======
        <div class="bg-green-900 py-2 text-white text-xs hidden md:block">
            <div class="max-w-7xl mx-auto px-4 flex justify-end gap-5">
                <a href="#" class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded font-bold transition">My IT DEL</a>
                <a href="#" class="bg-orange-500 hover:bg-orange-600 px-3 py-1 rounded font-bold transition uppercase">Pendaftaran</a>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-2">
                    <i class="fas fa-microscope text-green-600 text-2xl"></i>
                    <span class="font-bold text-green-600 text-xl tracking-tight">BIOPROSES <span class="text-green-800 underline decoration-green-500">IT DEL</span></span>
                </div>

                <div class="hidden md:flex space-x-4 font-semibold h-full">
                    
                    <a href="#" class="flex items-center text-green-600 border-b-4 border-green-600 px-1 text-sm">Beranda</a>

                    <div class="group nav-link-wrapper">
                        <button class="hover:text-green-600 transition flex items-center gap-1 text-sm">
                            Profil <i class="fas fa-chevron-down text-[10px] transition-transform group-hover:rotate-180"></i>
                        </button>
                        <div class="mega-menu absolute top-full left-0 w-full bg-white shadow-xl border-t-4 border-green-600 p-8">
                            <div class="max-w-7xl mx-auto grid grid-cols-4 gap-8">
                                <div>
                                    <h4 class="font-bold text-green-800 mb-3 uppercase text-xs border-b pb-2">Tentang</h4>
                                    <ul class="space-y-2 text-gray-600 text-sm font-normal">
                                        <li><a href="#" class="hover:text-green-600 flex items-center gap-2"><i class="fas fa-caret-right text-[10px]"></i> Visi & Misi</a></li>
                                        <li><a href="#" class="hover:text-green-600 flex items-center gap-2"><i class="fas fa-caret-right text-[10px]"></i> Sejarah</a></li>
                                        <li><a href="#" class="hover:text-green-600 flex items-center gap-2"><i class="fas fa-caret-right text-[10px]"></i> Akreditasi</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-bold text-green-800 mb-3 uppercase text-xs border-b pb-2">Akademik</h4>
                                    <ul class="space-y-2 text-gray-600 text-sm font-normal">
                                        <li><a href="#" class="hover:text-green-600 flex items-center gap-2"><i class="fas fa-caret-right text-[10px]"></i> Tujuan / CPL</a></li>
                                        <li><a href="#" class="hover:text-green-600 flex items-center gap-2"><i class="fas fa-caret-right text-[10px]"></i> Profil Lulusan</a></li>
                                        <li><a href="#" class="hover:text-green-600 flex items-center gap-2"><i class="fas fa-caret-right text-[10px]"></i> Dosen & Staff</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group nav-link-wrapper">
                        <button class="hover:text-green-600 transition flex items-center gap-1 text-sm">
                            Kurikulum <i class="fas fa-chevron-down text-[10px] transition-transform group-hover:rotate-180"></i>
                        </button>
                        <div class="mega-menu absolute top-full left-0 w-full bg-white shadow-xl border-t-4 border-green-600 p-8 text-sm">
                            <div class="max-w-7xl mx-auto grid grid-cols-3 gap-8">
                                <a href="#" class="block p-4 border rounded-lg hover:bg-green-50 transition group/item">
                                    <span class="font-bold block text-green-700">Struktur Kurikulum</span>
                                    <small class="text-gray-500">Alur mata kuliah tiap semester</small>
                                </a>
                                <a href="#" class="block p-4 border rounded-lg hover:bg-green-50 transition group/item">
                                    <span class="font-bold block text-green-700">Daftar Mata Kuliah</span>
                                    <small class="text-gray-500">List lengkap MK Bioproses</small>
                                </a>
                                <a href="#" class="block p-4 border rounded-lg hover:bg-green-50 transition group/item">
                                    <span class="font-bold block text-green-700">Deskripsi Mata Kuliah</span>
                                    <small class="text-gray-500">Penjelasan detail silabus</small>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="group nav-link-wrapper">
                        <button class="hover:text-green-600 transition flex items-center gap-1 text-sm">
                            Laboratorium <i class="fas fa-chevron-down text-[10px] transition-transform group-hover:rotate-180"></i>
                        </button>
                        <div class="mega-menu absolute top-full right-0 md:right-[20%] w-full md:w-[500px] bg-white shadow-xl border-t-4 border-green-600 p-6 text-sm">
                            <div class="grid grid-cols-2 gap-6 font-normal">
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2 border-b pb-1">Informasi Umum</h4>
                                    <a href="#" class="block py-1 text-gray-600 hover:text-green-600 italic">Profil Lab</a>
                                    <a href="#" class="block py-1 text-gray-600 hover:text-green-600 italic">Daftar Alat</a>
                                </div>
                                <div class="bg-gray-100 p-4 rounded-lg">
                                    <h4 class="font-bold text-gray-800 mb-2 underline">Portal Mahasiswa</h4>
                                    <a href="#" class="block py-1 text-green-700 font-bold hover:underline"><i class="fas fa-lock mr-2 text-xs"></i>Form Peminjaman</a>
                                    <p class="text-[10px] text-gray-500 mt-1">*Memerlukan Akun My IT DEL</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group nav-link-wrapper">
                        <button class="hover:text-green-600 transition flex items-center gap-1 text-sm">
                            Prestasi <i class="fas fa-chevron-down text-[10px] transition-transform group-hover:rotate-180"></i>
                        </button>
                        <div class="mega-menu absolute top-full left-0 w-full bg-white shadow-xl border-t-4 border-green-600 p-8 text-sm">
                            <div class="max-w-7xl mx-auto grid grid-cols-3 gap-8 font-normal">
                                <a href="#" class="group/card block p-4 bg-gray-50 rounded-xl hover:bg-green-600 transition">
                                    <h4 class="font-bold text-gray-800 group-hover/card:text-white transition mb-1 uppercase text-xs">Mahasiswa</h4>
                                    <p class="text-[10px] text-gray-500 group-hover/card:text-green-50 transition leading-relaxed">Pencapaian kompetisi, hibah, dan karya ilmiah.</p>
                                </a>
                                <a href="#" class="group/card block p-4 bg-gray-50 rounded-xl hover:bg-green-600 transition">
                                    <h4 class="font-bold text-gray-800 group-hover/card:text-white transition mb-1 uppercase text-xs">Dosen</h4>
                                    <p class="text-[10px] text-gray-500 group-hover/card:text-green-50 transition leading-relaxed">Publikasi internasional, paten, dan pengabdian.</p>
                                </a>
                                <a href="#" class="group/card block p-4 bg-gray-50 rounded-xl hover:bg-green-600 transition">
                                    <h4 class="font-bold text-gray-800 group-hover/card:text-white transition mb-1 uppercase text-xs">Program Studi</h4>
                                    <p class="text-[10px] text-gray-500 group-hover/card:text-green-50 transition leading-relaxed">Akreditasi Unggul & sertifikasi institusi.</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="group nav-link-wrapper">
                        <button class="hover:text-green-600 transition flex items-center gap-1 text-sm">
                            Kegiatan <i class="fas fa-chevron-down text-[10px] transition-transform group-hover:rotate-180"></i>
                        </button>
                        <div class="mega-menu absolute top-full left-0 w-full bg-white shadow-xl border-t-4 border-green-600 p-8 text-sm">
                            <div class="max-w-7xl mx-auto grid grid-cols-4 gap-8 font-normal">
                                <div>
                                    <h4 class="font-bold text-green-800 mb-2 border-b pb-1 text-xs uppercase">Sosial</h4>
                                    <a href="#" class="block py-2 text-gray-600 hover:text-green-700 transition">Pengabdian Masyarakat</a>
                                </div>
                                <div>
                                    <h4 class="font-bold text-green-800 mb-2 border-b pb-1 text-xs uppercase">Penelitian</h4>
                                    <a href="#" class="block py-1 text-gray-600 hover:text-green-700 transition">Penelitian Mahasiswa</a>
                                    <a href="#" class="block py-1 text-gray-600 hover:text-green-700 transition">Penelitian Dosen</a>
                                </div>
                                <div>
                                    <h4 class="font-bold text-green-800 mb-2 border-b pb-1 text-xs uppercase">Event</h4>
                                    <a href="#" class="block py-2 text-gray-600 hover:text-green-700 transition">Seminar & Workshop</a>
                                </div>
                                <div>
                                    <h4 class="font-bold text-green-800 mb-2 border-b pb-1 text-xs uppercase">Industri</h4>
                                    <a href="#" class="block py-2 text-gray-600 hover:text-green-700 transition">Kunjungan Industri</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group nav-link-wrapper">
                        <button class="hover:text-green-600 transition flex items-center gap-1 text-sm">
                            Fasilitas <i class="fas fa-chevron-down text-[10px] transition-transform group-hover:rotate-180"></i>
                        </button>
                        <div class="mega-menu absolute top-full left-0 w-full bg-white shadow-xl border-t-4 border-green-600 p-8 text-sm">
                            <div class="max-w-7xl mx-auto grid grid-cols-3 gap-8 font-normal">
                                <a href="#" class="flex items-start gap-4 p-4 hover:bg-gray-50 rounded-lg transition group/fas">
                                    <div class="bg-green-100 p-3 rounded-lg text-green-600 group-hover/fas:bg-green-600 group-hover/fas:text-white transition"><i class="fas fa-school"></i></div>
                                    <div>
                                        <h4 class="font-bold text-gray-800">Ruang Kelas</h4>
                                        <p class="text-[11px] text-gray-500">Dilengkapi sarana multimedia modern.</p>
                                    </div>
                                </a>
                                <a href="#" class="flex items-start gap-4 p-4 hover:bg-gray-50 rounded-lg transition group/fas">
                                    <div class="bg-green-100 p-3 rounded-lg text-green-600 group-hover/fas:bg-green-600 group-hover/fas:text-white transition"><i class="fas fa-comments"></i></div>
                                    <div>
                                        <h4 class="font-bold text-gray-800">Ruang Diskusi</h4>
                                        <p class="text-[11px] text-gray-500">Area kolaborasi terbuka untuk mahasiswa.</p>
                                    </div>
                                </a>
                                <a href="#" class="flex items-start gap-4 p-4 hover:bg-gray-50 rounded-lg transition group/fas">
                                    <div class="bg-green-100 p-3 rounded-lg text-green-600 group-hover/fas:bg-green-600 group-hover/fas:text-white transition"><i class="fas fa-wifi"></i></div>
                                    <div>
                                        <h4 class="font-bold text-gray-800">Sarana Pendukung</h4>
                                        <p class="text-[11px] text-gray-500">Akses internet cepat & area terbuka hijau.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="flex items-center hover:text-green-600 transition px-1 text-sm border-l pl-4 border-gray-200">
                        Berita & Pengumuman
                    </a>

                    <a href="#" class="flex items-center hover:text-green-600 transition px-1 text-sm">Kontak</a>
>>>>>>> fccdaef076b55d3c0d01ee51ca715e53617b2cb2
                </div>
            </div>
        </div>
    </nav>

<<<<<<< HEAD
    <header class="relative bg-green-900 py-24 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/microbes.png')]"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6">Masa Depan Industri <br><span class="text-green-400">Berbasis Hayati</span></h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto mb-10">
                Mempelajari rekayasa proses biologis untuk menghasilkan produk bernilai tinggi secara berkelanjutan dan ramah lingkungan.
            </p>
            <div class="flex justify-center gap-4">
                <a href="#explore" class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-full font-bold transition duration-300 shadow-lg">
                    Jelajahi Program
                </a>
                <a href="#" class="bg-transparent border-2 border-white hover:bg-white hover:text-green-900 text-white px-8 py-3 rounded-full font-bold transition duration-300">
=======
    <header class="relative h-[550px] bg-black flex items-center justify-center text-white overflow-hidden">
        <video autoplay muted loop class="absolute w-full h-full object-cover opacity-60">
            <source src="https://assets.mixkit.co/videos/preview/mixkit-biotechnology-researcher-working-in-a-lab-10345-large.mp4" type="video/mp4">
        </video>
        
        <div class="relative z-10 text-center px-4 max-w-4xl">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 drop-shadow-2xl uppercase tracking-tighter">Teknik <br><span class="text-green-400">Bioproses</span></h1>
            <p class="text-lg md:text-2xl text-gray-100 mb-10 font-light tracking-wide italic">
                "Engineering Biological Systems for a Sustainable Future"
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-5 font-bold">
                <a href="#" class="bg-green-600 hover:bg-green-700 text-white px-10 py-4 rounded-full shadow-xl transition-all hover:scale-105 active:scale-95 uppercase tracking-wider text-sm">
                    Jelajahi Program
                </a>
                <a href="#" class="bg-white/10 hover:bg-white hover:text-green-900 border-2 border-white text-white px-10 py-4 rounded-full shadow-xl transition-all hover:scale-105 active:scale-95 uppercase tracking-wider text-sm backdrop-blur-sm">
>>>>>>> fccdaef076b55d3c0d01ee51ca715e53617b2cb2
                    Pendaftaran
                </a>
            </div>
        </div>
<<<<<<< HEAD
    </header>

    <section id="explore" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 border rounded-2xl hover:shadow-xl transition duration-300 bg-white group">
                    <div class="w-12 h-12 bg-green-100 text-green-600 rounded-lg flex items-center justify-center mb-6 group-hover:bg-green-600 group-hover:text-white transition">
                        <i class="fas fa-flask text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Rekayasa Bioproses</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Pemanfaatan mikroorganisme dan sel untuk produksi skala industri obat-obatan, biofuel, dan makanan.</p>
                </div>

                <div class="p-8 border rounded-2xl hover:shadow-xl transition duration-300 bg-white group">
                    <div class="w-12 h-12 bg-green-100 text-green-600 rounded-lg flex items-center justify-center mb-6 group-hover:bg-green-600 group-hover:text-white transition">
                        <i class="fas fa-dna text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Teknologi Enzim</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Optimasi penggunaan katalis biologi dalam transformasi materi untuk efisiensi energi yang lebih baik.</p>
                </div>

                <div class="p-8 border rounded-2xl hover:shadow-xl transition duration-300 bg-white group">
                    <div class="w-12 h-12 bg-green-100 text-green-600 rounded-lg flex items-center justify-center mb-6 group-hover:bg-green-600 group-hover:text-white transition">
                        <i class="fas fa-leaf text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Keberlanjutan</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Berfokus pada ekonomi sirkular dan pengurangan limbah melalui sistem biorefineri yang cerdas.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-gray-400 py-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="mb-4">&copy; 2024 Program Studi Bioproses - Bioproses App. All rights reserved.</p>
            <div class="flex justify-center gap-6">
                <a href="#" class="hover:text-white"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-white"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="hover:text-white"><i class="fas fa-envelope"></i></a>
=======
        <div class="absolute bottom-0 w-full h-24 bg-gradient-to-t from-gray-50 to-transparent"></div>
    </header>

    <footer class="bg-gray-900 text-gray-400 py-12 mt-12 font-normal">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="flex items-center justify-center gap-2 mb-6 text-white font-bold text-xl">
                <i class="fas fa-microscope text-green-500"></i> BIOPROSES IT DEL
            </div>
            <p class="mb-8 text-sm text-gray-500 font-light">&copy; 2024 Program Studi Teknik Bioproses - Institut Teknologi Del. <br>Toba, Sumatera Utara.</p>
            <div class="flex justify-center gap-8">
                <a href="#" class="hover:text-green-500 transition text-xl"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-blue-500 transition text-xl"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="hover:text-red-500 transition text-xl"><i class="fas fa-envelope"></i></a>
>>>>>>> fccdaef076b55d3c0d01ee51ca715e53617b2cb2
            </div>
        </div>
    </footer>

</body>
</html>