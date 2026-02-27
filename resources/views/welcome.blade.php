<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teknik Bioproses | IT DEL</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <style>
        :root {
            --green-primary: #16a34a;
            --green-dark: #14532d;
            --green-light: #bbf7d0;
            --green-accent: #4ade80;
            --gold: #d4a017;
            --bg: #f0faf4;
            --text: #0f1f14;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background: var(--bg);
            font-family: 'DM Sans', sans-serif;
            color: var(--text);
            overflow-x: hidden;
        }

        /* ── TOP BAR ── */
        .topbar {
            background: var(--green-dark);
            color: #a7f3d0;
            font-size: 0.72rem;
            padding: 0.4rem 0;
            letter-spacing: 0.03em;
        }
        .topbar-inner {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: flex-end;
            gap: 0.75rem;
            align-items: center;
        }
        .topbar a {
            color: #a7f3d0;
            text-decoration: none;
            padding: 0.2rem 0.75rem;
            border-radius: 4px;
            font-weight: 600;
            transition: background 0.2s;
        }
        .topbar a.btn-my { background: #1d4ed8; color: #fff; }
        .topbar a.btn-daftar { background: #ea580c; color: #fff; text-transform: uppercase; }
        .topbar a:hover { opacity: 0.85; }

        /* ── NAVBAR ── */
        nav {
            background: #fff;
            box-shadow: 0 2px 12px rgba(0,0,0,0.07);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .nav-inner {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            align-items: center;
            height: 68px;
            justify-content: space-between;
        }
        .nav-brand {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            text-decoration: none;
        }
        .nav-brand .icon {
            width: 40px; height: 40px;
            background: var(--green-primary);
            color: #fff;
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.1rem;
        }
        .nav-brand .label {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: 1.1rem;
            color: var(--green-dark);
            line-height: 1.1;
        }
        .nav-brand .label span { color: var(--green-primary); }

        .nav-links {
            display: flex;
            align-items: center;
            height: 100%;
            gap: 0.25rem;
            list-style: none;
        }
        .nav-links > li { height: 100%; position: relative; }
        .nav-links > li > a,
        .nav-links > li > button {
            height: 100%;
            display: flex;
            align-items: center;
            gap: 0.3rem;
            padding: 0 0.85rem;
            font-size: 0.82rem;
            font-weight: 500;
            color: #374151;
            background: none;
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-bottom: 3px solid transparent;
            transition: color 0.2s, border-color 0.2s;
            white-space: nowrap;
        }
        .nav-links > li > a:hover,
        .nav-links > li > button:hover,
        .nav-links > li > a.active {
            color: var(--green-primary);
            border-bottom-color: var(--green-primary);
        }
        .nav-links > li > a.active { font-weight: 700; }

        /* Dropdown */
        .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: #fff;
            border-top: 3px solid var(--green-primary);
            box-shadow: 0 12px 40px rgba(0,0,0,0.1);
            border-radius: 0 0 12px 12px;
            min-width: 680px;
            padding: 1.75rem;
            animation: dropIn 0.25s ease;
            z-index: 200;
        }
        .dropdown.narrow { min-width: 380px; }
        @keyframes dropIn {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .nav-links > li:hover .dropdown { display: block; }

        .dropdown-grid { display: grid; gap: 2rem; }
        .dropdown-grid.cols-2 { grid-template-columns: repeat(2, 1fr); }
        .dropdown-grid.cols-3 { grid-template-columns: repeat(3, 1fr); }
        .dropdown-grid.cols-4 { grid-template-columns: repeat(4, 1fr); }

        .drop-section h4 {
            font-family: 'Syne', sans-serif;
            font-size: 0.65rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--green-dark);
            margin-bottom: 0.6rem;
            padding-bottom: 0.4rem;
            border-bottom: 1px solid #d1fae5;
        }
        .drop-section a {
            display: flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.3rem 0;
            font-size: 0.82rem;
            color: #4b5563;
            text-decoration: none;
            transition: color 0.15s, padding-left 0.15s;
        }
        .drop-section a:hover { color: var(--green-primary); padding-left: 0.4rem; }
        .drop-section a i { font-size: 0.55rem; color: var(--green-primary); }

        /* Card-style dropdown items */
        .drop-card {
            display: block;
            padding: 0.85rem 1rem;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            text-decoration: none;
            transition: background 0.2s, border-color 0.2s, transform 0.2s;
        }
        .drop-card:hover { background: #f0faf4; border-color: var(--green-primary); transform: translateY(-2px); }
        .drop-card strong { display: block; font-size: 0.83rem; color: var(--green-dark); margin-bottom: 0.2rem; }
        .drop-card small { font-size: 0.72rem; color: #9ca3af; }

        /* Icon card */
        .drop-icon-card {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            padding: 0.75rem;
            border-radius: 10px;
            text-decoration: none;
            transition: background 0.2s;
        }
        .drop-icon-card:hover { background: #f0faf4; }
        .drop-icon-card .icon-box {
            width: 36px; height: 36px; min-width: 36px;
            background: #d1fae5;
            color: var(--green-primary);
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            font-size: 0.9rem;
            transition: background 0.2s, color 0.2s;
        }
        .drop-icon-card:hover .icon-box { background: var(--green-primary); color: #fff; }
        .drop-icon-card strong { display: block; font-size: 0.83rem; color: var(--green-dark); }
        .drop-icon-card small { font-size: 0.72rem; color: #9ca3af; }

        /* Portal box */
        .portal-box {
            background: #f0faf4;
            border: 1px dashed #86efac;
            border-radius: 10px;
            padding: 1rem;
        }
        .portal-box h4 { color: var(--green-dark); font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 0.5rem; }
        .portal-box a {
            display: flex; align-items: center; gap: 0.4rem;
            color: var(--green-primary); font-weight: 700; font-size: 0.82rem;
            text-decoration: none; margin-bottom: 0.25rem;
        }
        .portal-box a:hover { text-decoration: underline; }
        .portal-box p { font-size: 0.65rem; color: #9ca3af; }

        /* ── HERO ── */
        .hero {
            position: relative;
            height: 580px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: #0d1f13;
        }
        .hero video {
            position: absolute;
            inset: 0;
            width: 100%; height: 100%;
            object-fit: cover;
            opacity: 0.45;
        }
        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(6,50,20,0.75) 0%, rgba(0,0,0,0.3) 100%);
        }
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 0 1.5rem;
            max-width: 780px;
        }
        .hero-eyebrow {
            display: inline-block;
            background: rgba(74,222,128,0.15);
            border: 1px solid rgba(74,222,128,0.4);
            color: var(--green-accent);
            font-size: 0.72rem;
            font-weight: 600;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            padding: 0.3rem 0.9rem;
            border-radius: 999px;
            margin-bottom: 1.25rem;
            backdrop-filter: blur(6px);
            animation: fadeUp 0.6s ease both;
        }
        .hero h1 {
            font-family: 'Syne', sans-serif;
            font-size: clamp(3rem, 7vw, 5.5rem);
            font-weight: 800;
            line-height: 1.0;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: -0.02em;
            margin-bottom: 1rem;
            animation: fadeUp 0.6s 0.1s ease both;
        }
        .hero h1 span { color: var(--green-accent); }
        .hero p {
            font-size: 1.1rem;
            color: #d1fae5;
            font-weight: 300;
            font-style: italic;
            letter-spacing: 0.04em;
            margin-bottom: 2.25rem;
            animation: fadeUp 0.6s 0.2s ease both;
        }
        .hero-btns {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
            animation: fadeUp 0.6s 0.3s ease both;
        }
        .btn-primary {
            background: var(--green-primary);
            color: #fff;
            padding: 0.85rem 2.25rem;
            border-radius: 999px;
            font-weight: 700;
            font-size: 0.82rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            text-decoration: none;
            transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 20px rgba(22,163,74,0.45);
        }
        .btn-primary:hover { background: #15803d; transform: translateY(-2px); box-shadow: 0 8px 28px rgba(22,163,74,0.5); }
        .btn-outline {
            background: rgba(255,255,255,0.08);
            color: #fff;
            border: 1.5px solid rgba(255,255,255,0.5);
            padding: 0.85rem 2.25rem;
            border-radius: 999px;
            font-weight: 700;
            font-size: 0.82rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            text-decoration: none;
            backdrop-filter: blur(8px);
            transition: background 0.2s, color 0.2s, transform 0.2s;
        }
        .btn-outline:hover { background: #fff; color: var(--green-dark); transform: translateY(-2px); }
        .hero-fade {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            height: 80px;
            background: linear-gradient(to top, var(--bg), transparent);
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* ── FEATURE CARDS ── */
        .features {
            padding: 5rem 2rem;
            max-width: 1280px;
            margin: 0 auto;
        }
        .section-tag {
            font-family: 'Syne', sans-serif;
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--green-primary);
            margin-bottom: 0.5rem;
        }
        .section-title {
            font-family: 'Syne', sans-serif;
            font-size: clamp(1.8rem, 3.5vw, 2.6rem);
            font-weight: 800;
            color: var(--green-dark);
            line-height: 1.15;
            margin-bottom: 3rem;
        }
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }
        .feature-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 2rem;
            transition: transform 0.25s, box-shadow 0.25s, border-color 0.25s;
            position: relative;
            overflow: hidden;
        }
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--green-primary), var(--green-accent));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }
        .feature-card:hover { transform: translateY(-5px); box-shadow: 0 16px 40px rgba(0,0,0,0.08); border-color: #bbf7d0; }
        .feature-card:hover::before { transform: scaleX(1); }
        .feature-icon {
            width: 52px; height: 52px;
            background: #d1fae5;
            color: var(--green-primary);
            border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.3rem;
            margin-bottom: 1.25rem;
            transition: background 0.2s, color 0.2s;
        }
        .feature-card:hover .feature-icon { background: var(--green-primary); color: #fff; }
        .feature-card h3 {
            font-family: 'Syne', sans-serif;
            font-size: 1.05rem;
            font-weight: 700;
            margin-bottom: 0.6rem;
            color: var(--green-dark);
        }
        .feature-card p { font-size: 0.85rem; color: #6b7280; line-height: 1.7; }

        /* ── STATS BAR ── */
        .stats-bar {
            background: var(--green-dark);
            padding: 3rem 2rem;
            margin: 0 0 5rem;
        }
        .stats-inner {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            text-align: center;
        }
        .stat-item .num {
            font-family: 'Syne', sans-serif;
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--green-accent);
            line-height: 1;
        }
        .stat-item .label { font-size: 0.8rem; color: #a7f3d0; margin-top: 0.3rem; letter-spacing: 0.04em; }

        /* ── FOOTER ── */
        footer {
            background: #0d1f13;
            color: #6b7280;
            padding: 3.5rem 2rem 2rem;
        }
        .footer-inner {
            max-width: 1280px;
            margin: 0 auto;
        }
        .footer-brand {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            margin-bottom: 0.6rem;
        }
        .footer-brand .icon {
            width: 36px; height: 36px;
            background: var(--green-primary);
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            color: #fff; font-size: 1rem;
        }
        .footer-brand .name {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: 1.05rem;
            color: #fff;
        }
        .footer-brand .name span { color: var(--green-accent); }
        .footer-sub { font-size: 0.8rem; margin-bottom: 1.5rem; line-height: 1.6; }
        .footer-socials { display: flex; gap: 1rem; }
        .footer-socials a {
            width: 36px; height: 36px;
            background: #1a3626;
            color: #a7f3d0;
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            font-size: 0.95rem;
            transition: background 0.2s, color 0.2s;
            text-decoration: none;
        }
        .footer-socials a:hover { background: var(--green-primary); color: #fff; }
        .footer-divider { border: none; border-top: 1px solid #1a3626; margin: 1.5rem 0; }
        .footer-copy { font-size: 0.72rem; text-align: center; color: #374151; }

        /* ── MOBILE HAMBURGER ── */
        .hamburger { display: none; background: none; border: none; cursor: pointer; padding: 0.4rem; }
        .hamburger span { display: block; width: 22px; height: 2px; background: var(--green-dark); margin: 5px 0; border-radius: 2px; transition: 0.3s; }

        @media (max-width: 1024px) {
            .nav-links { display: none; }
            .hamburger { display: block; }
            .stats-inner { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 600px) {
            .stats-inner { grid-template-columns: 1fr; }
            .hero h1 { font-size: 2.6rem; }
        }
    </style>
</head>
<body>

    <!-- TOP BAR -->
    <div class="topbar">
        <div class="topbar-inner">
            <a href="#" class="btn-my">My IT DEL</a>
            <a href="#" class="btn-daftar">Pendaftaran</a>
        </div>
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
                </li>

                <!-- KURIKULUM -->
                <li>
                    <button>Kurikulum <i class="fas fa-chevron-down" style="font-size:0.6rem"></i></button>
                    <div class="dropdown">
                        <div class="dropdown-grid cols-3">
                            <a href="#" class="drop-card">
                                <strong>Struktur Kurikulum</strong>
                                <small>Alur mata kuliah tiap semester</small>
                            </a>
                            <a href="#" class="drop-card">
                                <strong>Daftar Mata Kuliah</strong>
                                <small>List lengkap MK Bioproses</small>
                            </a>
                            <a href="#" class="drop-card">
                                <strong>Deskripsi Mata Kuliah</strong>
                                <small>Penjelasan detail silabus</small>
                            </a>
                        </div>
                    </div>
                </li>

                <!-- LABORATORIUM -->
                <li>
                    <button>Laboratorium <i class="fas fa-chevron-down" style="font-size:0.6rem"></i></button>
                    <div class="dropdown narrow">
                        <div class="dropdown-grid cols-2">
                            <div class="drop-section">
                                <h4>Informasi Umum</h4>
                                <a href="#"><i class="fas fa-caret-right"></i> Profil Lab</a>
                                <a href="#"><i class="fas fa-caret-right"></i> Daftar Alat</a>
                            </div>
                            <div class="portal-box">
                                <h4>Portal Mahasiswa</h4>
                                <a href="#"><i class="fas fa-lock" style="font-size:0.7rem"></i> Form Peminjaman</a>
                                <p>*Memerlukan Akun My IT DEL</p>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- PRESTASI -->
                <li>
                    <button>Prestasi <i class="fas fa-chevron-down" style="font-size:0.6rem"></i></button>
                    <div class="dropdown">
                        <div class="dropdown-grid cols-3">
                            <a href="#" class="drop-card" style="background:#f0fdf4">
                                <strong>Mahasiswa</strong>
                                <small>Kompetisi, hibah, dan karya ilmiah.</small>
                            </a>
                            <a href="#" class="drop-card" style="background:#f0fdf4">
                                <strong>Dosen</strong>
                                <small>Publikasi internasional, paten, pengabdian.</small>
                            </a>
                            <a href="#" class="drop-card" style="background:#f0fdf4">
                                <strong>Program Studi</strong>
                                <small>Akreditasi Unggul &amp; sertifikasi institusi.</small>
                            </a>
                        </div>
                    </div>
                </li>

                <!-- KEGIATAN -->
                <li>
                    <button>Kegiatan <i class="fas fa-chevron-down" style="font-size:0.6rem"></i></button>
                    <div class="dropdown">
                        <div class="dropdown-grid cols-4">
                            <div class="drop-section">
                                <h4>Sosial</h4>
                                <a href="#"><i class="fas fa-caret-right"></i> Pengabdian Masyarakat</a>
                            </div>
                            <div class="drop-section">
                                <h4>Penelitian</h4>
                                <a href="#"><i class="fas fa-caret-right"></i> Penelitian Mahasiswa</a>
                                <a href="#"><i class="fas fa-caret-right"></i> Penelitian Dosen</a>
                            </div>
                            <div class="drop-section">
                                <h4>Event</h4>
                                <a href="#"><i class="fas fa-caret-right"></i> Seminar &amp; Workshop</a>
                            </div>
                            <div class="drop-section">
                                <h4>Industri</h4>
                                <a href="#"><i class="fas fa-caret-right"></i> Kunjungan Industri</a>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- FASILITAS -->
                <li>
                    <button>Fasilitas <i class="fas fa-chevron-down" style="font-size:0.6rem"></i></button>
                    <div class="dropdown">
                        <div class="dropdown-grid cols-3">
                            <a href="#" class="drop-icon-card">
                                <div class="icon-box"><i class="fas fa-school"></i></div>
                                <div>
                                    <strong>Ruang Kelas</strong>
                                    <small>Dilengkapi sarana multimedia modern.</small>
                                </div>
                            </a>
                            <a href="#" class="drop-icon-card">
                                <div class="icon-box"><i class="fas fa-comments"></i></div>
                                <div>
                                    <strong>Ruang Diskusi</strong>
                                    <small>Area kolaborasi terbuka untuk mahasiswa.</small>
                                </div>
                            </a>
                            <a href="#" class="drop-icon-card">
                                <div class="icon-box"><i class="fas fa-wifi"></i></div>
                                <div>
                                    <strong>Sarana Pendukung</strong>
                                    <small>Internet cepat &amp; area terbuka hijau.</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                <li><a href="#">Berita</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>

            <button class="hamburger" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>

    <!-- HERO -->
    <header class="hero">
        <video autoplay muted loop playsinline>
            <source src="https://assets.mixkit.co/videos/preview/mixkit-biotechnology-researcher-working-in-a-lab-10345-large.mp4" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <span class="hero-eyebrow">Institut Teknologi Del · Toba</span>
            <h1>Teknik<br><span>Bioproses</span></h1>
            <p>"Engineering Biological Systems for a Sustainable Future"</p>
            <div class="hero-btns">
                <a href="#features" class="btn-primary">Jelajahi Program</a>
                <a href="#" class="btn-outline">Pendaftaran</a>
            </div>
        </div>
        <div class="hero-fade"></div>
    </header>

    <!-- STATS BAR -->
    <div class="stats-bar">
        <div class="stats-inner">
            <div class="stat-item">
                <div class="num">500+</div>
                <div class="label">Mahasiswa Aktif</div>
            </div>
            <div class="stat-item">
                <div class="num">40+</div>
                <div class="label">Dosen &amp; Peneliti</div>
            </div>
            <div class="stat-item">
                <div class="num">A</div>
                <div class="label">Akreditasi BAN-PT</div>
            </div>
            <div class="stat-item">
                <div class="num">95%</div>
                <div class="label">Tingkat Keterserapan</div>
            </div>
        </div>
    </div>

    <!-- FEATURES -->
    <section class="features" id="features">
        <div class="section-tag">Program Unggulan</div>
        <div class="section-title">Bidang Keahlian<br>Teknik Bioproses</div>
        <div class="feature-grid">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-flask"></i></div>
                <h3>Rekayasa Bioproses</h3>
                <p>Pemanfaatan mikroorganisme dan sel untuk produksi skala industri: obat-obatan, biofuel, dan produk pangan fungsional.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-dna"></i></div>
                <h3>Teknologi Enzim</h3>
                <p>Optimasi katalis biologi dalam transformasi materi untuk efisiensi energi tinggi dan proses yang berkelanjutan.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-seedling"></i></div>
                <h3>Keberlanjutan &amp; Biorefinery</h3>
                <p>Berfokus pada ekonomi sirkular dan pengurangan limbah melalui sistem biorefineri cerdas berbasis biomassa.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-industry"></i></div>
                <h3>Skala Industri</h3>
                <p>Perancangan dan pengendalian bioreaktor dari skala laboratorium hingga skala produksi komersial.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-microscope"></i></div>
                <h3>Riset &amp; Inovasi</h3>
                <p>Penelitian kolaboratif dengan industri dan lembaga riset nasional untuk menghasilkan inovasi terapan.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-graduation-cap"></i></div>
                <h3>Kompetensi Lulusan</h3>
                <p>Lulusan siap berkarir di industri farmasi, pangan, energi, lingkungan, serta melanjutkan studi ke jenjang S2/S3.</p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-inner">
            <div class="footer-brand">
                <div class="icon"><i class="fas fa-microscope"></i></div>
                <div class="name">BIOPROSES <span>IT DEL</span></div>
            </div>
            <p class="footer-sub">Program Studi Teknik Bioproses<br>Institut Teknologi Del — Toba, Sumatera Utara</p>
            <div class="footer-socials">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#" style="font-size:0.9rem"><i class="fas fa-envelope"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <hr class="footer-divider">
        <p class="footer-copy">&copy; 2024 Program Studi Teknik Bioproses — Institut Teknologi Del. All rights reserved.</p>
    </footer>

</body>
</html>