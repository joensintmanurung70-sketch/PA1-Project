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

        /* ── NAVBAR ── */
        nav {
            background: #fff;
            box-shadow: 0 2px 12px rgba(0,0,0,0.07);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .nav-inner {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            align-items: center;
            height: 70px;
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

        .nav-links {
            display: flex;
            align-items: center;
            height: 100%;
            gap: 0.5rem;
            list-style: none;
        }
        .nav-links > li { height: 100%; position: relative; }
        .nav-links > li > a,
        .nav-links > li > button {
            height: 100%;
            display: flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0 1rem;
            font-size: 0.85rem;
            font-weight: 600;
            color: #374151;
            background: none;
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-bottom: 3px solid transparent;
            transition: all 0.2s;
        }
        .nav-links > li:hover > a, 
        .nav-links > li:hover > button {
            color: var(--green-primary);
            border-bottom-color: var(--green-primary);
        }

        /* ── DROPDOWNS ── */
        .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            background: #fff;
            border-top: 3px solid var(--green-primary);
            box-shadow: 0 12px 40px rgba(0,0,0,0.1);
            border-radius: 0 0 12px 12px;
            min-width: 600px;
            padding: 1.5rem;
            z-index: 2000;
        }
        .nav-links > li:hover .dropdown { display: block; animation: dropIn 0.3s ease; }
        .dropdown.narrow { min-width: 350px; }

        @keyframes dropIn {
            from { opacity: 0; transform: translateY(10px) translateX(-50%); }
            to { opacity: 1; transform: translateY(0) translateX(-50%); }
        }

        .dropdown-grid { display: grid; gap: 1.5rem; }
        .cols-2 { grid-template-columns: repeat(2, 1fr); }

        .drop-section h4 {
            font-size: 0.7rem;
            text-transform: uppercase;
            color: var(--green-dark);
            border-bottom: 1px solid #e5e7eb;
            margin-bottom: 0.75rem;
            padding-bottom: 0.3rem;
        }
        .drop-section a {
            display: block;
            padding: 0.4rem 0;
            font-size: 0.85rem;
            color: #4b5563;
            text-decoration: none;
        }
        .drop-section a:hover { color: var(--green-primary); transform: translateX(5px); transition: 0.2s; }

        .drop-card {
            display: block;
            padding: 1rem;
            border: 1px solid #f3f4f6;
            border-radius: 12px;
            text-decoration: none;
            transition: 0.2s;
            margin-bottom: 0.5rem;
        }
        .drop-card:hover { background: var(--bg); border-color: var(--green-primary); }
        .drop-card strong { display: block; color: var(--green-dark); font-size: 0.9rem; }
        .drop-card small { color: #9ca3af; font-size: 0.75rem; }

        .sub-menu {
            margin-left: 1rem;
            border-left: 2px solid #e5e7eb;
            padding-left: 0.75rem;
            margin-bottom: 0.5rem;
        }

        /* ── HERO ── */
        .hero {
            position: relative;
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #000;
        }
        .hero video {
            position: absolute;
            inset: 0;
            width: 100%; height: 100%;
            object-fit: cover;
            opacity: 0.5;
        }
        .hero-overlay { position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(0,0,0,0.4), var(--green-dark)); opacity: 0.6; }
        .hero-content { position: relative; z-index: 10; text-align: center; color: #fff; padding: 0 20px; }
        .hero h1 { font-family: 'Syne', sans-serif; font-size: 4rem; text-transform: uppercase; line-height: 1; }
        .hero h1 span { color: var(--green-accent); }
        
        .btn-primary {
            display: inline-block;
            background: var(--green-primary);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            margin-top: 2rem;
            box-shadow: 0 10px 20px rgba(22,163,74,0.3);
        }

        /* ── STATS & FEATURES ── */
        .stats-bar { background: var(--green-dark); padding: 3rem 0; color: white; }
        .stats-inner { max-width: 1280px; margin: 0 auto; display: grid; grid-template-columns: repeat(4, 1fr); text-align: center; }
        
        .features { padding: 5rem 2rem; max-width: 1280px; margin: 0 auto; }
        .feature-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; }
        .feature-card { background: white; padding: 2rem; border-radius: 20px; border: 1px solid #eee; transition: 0.3s; }
        .feature-card:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.05); }

        footer { background: #071a0e; color: #9ca3af; padding: 4rem 2rem; text-align: center; }

        .hamburger { display: none; }

        @media (max-width: 1024px) {
            .nav-links { display: none; }
            .hamburger { display: block; background: none; border: none; font-size: 1.5rem; color: var(--green-dark); cursor: pointer; }
            .stats-inner { grid-template-columns: repeat(2, 1fr); gap: 2rem; }
        }
    </style>
</head>
<body>

    <div class="topbar">
        <div class="topbar-inner">
            <a href="#" class="btn-my">My IT DEL</a>
            <a href="#" class="btn-daftar">Pendaftaran</a>
        </div>
    </div>

    <nav>
        <div class="nav-inner">
            <a href="#" class="nav-brand">
                <div class="icon"><i class="fas fa-leaf"></i></div>
                <div class="label">BIOPROSES <span>DEL</span></div>
            </a>

            <ul class="nav-links">
                <li><a href="#">Beranda</a></li>
                
                <li>
                    <button>Profil <i class="fas fa-chevron-down" style="font-size:0.6rem"></i></button>
                    <div class="dropdown">
                        <div class="dropdown-grid cols-2">
                            <div class="drop-section">
                                <h4>Tentang Kami</h4>
                                <a href="{{ route('visi.misi') }}"> <i class="fas fa-caret-right"></i> Visi & Misi </a>
                                <a href="#"><i class="fas fa-caret-right"></i> Sejarah</a>
                                <a href="#"><i class="fas fa-caret-right"></i> Akreditasi</a>
                            </div>
                            <div class="drop-section">
                                <h4>Akademik</h4>
                                <a href="#"><i class="fas fa-caret-right"></i> Kurikulum / CPL</a>
                                <a href="#"><i class="fas fa-caret-right"></i> Profil Lulusan</a>
                                <a href="#"><i class="fas fa-caret-right"></i> Dosen & Staff</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <button>Kurikulum <i class="fas fa-chevron-down" style="font-size:0.6rem"></i></button>
                    <div class="dropdown narrow">
                        <div class="dropdown-grid">
                            <a href="#" class="drop-card">
                                <strong>Struktur Kurikulum</strong>
                                <small>Alur mata kuliah tiap semester</small>
                            </a>
                            <a href="#" class="drop-card">
                                <strong>Silabus</strong>
                                <small>Penjelasan detail tiap MK</small>
                            </a>
                        </div>
                    </div>
                </li>

                <li>
                    <button>Laboratorium <i class="fas fa-chevron-down" style="font-size:0.6rem"></i></button>
                    <div class="dropdown narrow">
                        <div class="dropdown-grid">
                            <div class="drop-section">
                                <h4>Informasi Umum</h4>
                                <a href="#" class="drop-card">
                                    <strong>Profil Lab</strong>
                                    <small>Visi, misi, dan standar fasilitas</small>
                                </a>
                                <a href="#" class="drop-card">
                                    <strong>Daftar Alat</strong>
                                    <small>Inventaris dan spesifikasi alat lab</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <button>Fasilitas <i class="fas fa-chevron-down" style="font-size:0.6rem"></i></button>
                    <div class="dropdown narrow">
                        <div class="dropdown-grid">
                            <div class="drop-section">
                                <h4>Lingkungan Belajar</h4>
                                <a href="#" class="drop-card">
                                    <strong>Ruang Kelas</strong>
                                    <small>Fasilitas belajar multimedia</small>
                                </a>
                                <a href="#" class="drop-card">
                                    <strong>Ruang Diskusi</strong>
                                    <small>Area kolaborasi mahasiswa</small>
                                </a>
                                <a href="#" class="drop-card">
                                    <strong>Sarana Pendukung</strong>
                                    <small>Asrama, kantin, dan olahraga</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <button>Prestasi <i class="fas fa-chevron-down" style="font-size:0.6rem"></i></button>
                    <div class="dropdown narrow">
                        <div class="dropdown-grid">
                            <div class="drop-section">
                                <h4>Capaian & Penghargaan</h4>
                                <a href="#" class="drop-card">
                                    <strong>Prestasi Mahasiswa</strong>
                                    <small>Lomba nasional & internasional</small>
                                </a>
                                <a href="#" class="drop-card">
                                    <strong>Prestasi Dosen</strong>
                                    <small>Hibah penelitian & publikasi ilmiah</small>
                                </a>
                                <a href="#" class="drop-card">
                                    <strong>Prestasi Program Studi</strong>
                                    <small>Akreditasi dan kerjasama</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <button>Kegiatan <i class="fas fa-chevron-down" style="font-size:0.6rem"></i></button>
                    <div class="dropdown narrow">
                        <div class="dropdown-grid">
                            <div class="drop-section">
                                <h4>Program & Aktivitas</h4>
                                <a href="#" class="drop-card">
                                    <strong>Pengabdian Masyarakat</strong>
                                    <small>Implementasi ilmu ke publik</small>
                                </a>
                                <div class="drop-card" style="cursor: default; background: #fafafa; border-bottom: none; margin-bottom: 0;">
                                    <strong>Penelitian</strong>
                                </div>
                                <div class="sub-menu">
                                    <a href="#"><i class="fas fa-microscope" style="font-size: 0.7rem;"></i> Penelitian Mahasiswa</a>
                                    <a href="#"><i class="fas fa-user-graduate" style="font-size: 0.7rem;"></i> Penelitian Dosen</a>
                                </div>
                                <a href="#" class="drop-card">
                                    <strong>Seminar & Workshop</strong>
                                    <small>Pengembangan skill & wawasan</small>
                                </a>
                                <a href="#" class="drop-card">
                                    <strong>Kunjungan Industri</strong>
                                    <small>Observasi lapangan kerja</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>

                <li><a href="#">Berita</a></li>

                <li>
                    <button>Kontak <i class="fas fa-chevron-down" style="font-size:0.6rem"></i></button>
                    <div class="dropdown narrow">
                        <div class="dropdown-grid">
                            <div class="drop-section">
                                <h4>Hubungi Kami</h4>
                                <a href="#" class="drop-card">
                                    <strong>Alamat</strong>
                                    <small>Jl. Sisingamangaraja, Tobasa, Sumut</small>
                                </a>
                                <a href="#" class="drop-card">
                                    <strong>Email</strong>
                                    <small>bioproses@del.ac.id</small>
                                </a>
                                <a href="#" class="drop-card">
                                    <strong>Form Kontak</strong>
                                    <small>Kirim pesan langsung kepada kami</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <button class="hamburger">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <header class="hero">
        <video autoplay muted loop playsinline>
            <source src="https://assets.mixkit.co/videos/preview/mixkit-biotechnology-researcher-working-in-a-lab-10345-large.mp4" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <span style="letter-spacing: 4px; font-weight: 600;">INSTITUT TEKNOLOGI DEL</span>
            <h1>Teknik<br><span>Bioproses</span></h1>
            <p>"Engineering Biological Systems for a Sustainable Future"</p>
            <a href="#features" class="btn-primary">Jelajahi Program</a>
        </div>
    </header>

    <section class="stats-bar">
        <div class="stats-inner">
            <div class="stat-item"><h2>500+</h2><p>Mahasiswa</p></div>
            <div class="stat-item"><h2>40+</h2><p>Peneliti</p></div>
            <div class="stat-item"><h2>A</h2><p>Akreditasi</p></div>
            <div class="stat-item"><h2>95%</h2><p>Karir Lulusan</p></div>
        </div>
    </section>

    <section class="features" id="features">
        <h2 style="text-align:center; margin-bottom:3rem; font-family:'Syne'; font-size:2.5rem; color:var(--green-dark)">Bidang Keahlian</h2>
        <div class="feature-grid">
            <div class="feature-card">
                <i class="fas fa-flask fa-2x" style="color:var(--green-primary); margin-bottom:1rem"></i>
                <h3>Rekayasa Bioproses</h3>
                <p>Pemanfaatan mikroorganisme untuk produksi obat-obatan dan biofuel skala industri.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-dna fa-2x" style="color:var(--green-primary); margin-bottom:1rem"></i>
                <h3>Teknologi Enzim</h3>
                <p>Optimasi katalis biologi untuk efisiensi energi dan keberlanjutan lingkungan.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-seedling fa-2x" style="color:var(--green-primary); margin-bottom:1rem"></i>
                <h3>Biorefinery</h3>
                <p>Pengembangan sistem ekonomi sirkular berbasis biomassa dan limbah organik.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 Program Studi Teknik Bioproses — Institut Teknologi Del. All rights reserved.</p>
    </footer>

</body>
</html>