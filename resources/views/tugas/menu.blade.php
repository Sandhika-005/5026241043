<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Interaktif | Sandhika</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        :root {
            --primary: #6366f1;
            --secondary: #a855f7;
            --bg: #0f172a;
            --card-bg: rgba(30, 41, 59, 0.7);
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg);
            color: #f8fafc;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .bento-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-auto-rows: minmax(180px, auto);
            gap: 24px;
            padding: 20px 0;
        }

        .bento-item {
            background: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            border-radius: 32px;
            padding: 30px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }

        .bento-item:hover {
            transform: translateY(-10px) scale(1.02);
            border-color: var(--primary);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            background: rgba(30, 41, 59, 0.9);
        }

        /* --- ANIMASI IKON INTERAKTIF --- */
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-5px); }
            100% { transform: translateY(0px); }
        }

        .icon-box {
            width: 56px;
            height: 56px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.5s ease;
            animation: floating 3s ease-in-out infinite; /* Efek mengapung */
            box-shadow: inset 0 0 10px rgba(255,255,255,0.02);
        }

        .bento-item:hover .icon-box {
            transform: rotateY(180deg) scale(1.1); /* Berputar saat hover */
            background: var(--primary);
            color: white;
            box-shadow: 0 0 20px rgba(99, 102, 241, 0.5);
            border-color: rgba(255, 255, 255, 0.5);
            animation: none; /* Berhenti mengapung saat di-hover agar stabil */
        }

        /* Ikon spesifik pada featured card */
        .featured-bg .icon-box {
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }

        .featured-bg:hover .icon-box {
            background: white;
            color: var(--primary);
            transform: rotate(15deg) scale(1.2);
        }
        /* --- END ANIMASI IKON --- */

        .item-large { grid-column: span 2; grid-row: span 2; }
        .item-wide { grid-column: span 2; }

        .btn-action {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 16px;
            padding: 12px 20px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: 0.3s;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            margin-top: 20px;
        }

        .bento-item:hover .btn-action {
            background: white;
            color: var(--bg);
        }

        .featured-bg { background-color: #4f46e5; }

        h4 { font-weight: 700; letter-spacing: -0.5px; }
        p.desc { opacity: 0.6; font-size: 0.85rem; line-height: 1.6; }

        @media (max-width: 992px) {
            .bento-container { grid-template-columns: repeat(2, 1fr); }
            .item-large { grid-column: span 2; }
        }
        @media (max-width: 576px) {
            .bento-container { grid-template-columns: 1fr; }
            .item-large, .item-wide { grid-column: span 1; }
        }
    </style>
</head>
<body>

    <div class="container py-5">
        <div class="row mb-5 animate__animated animate__fadeInDown">
            <div class="col-lg-7">
                <span class="badge bg-primary px-3 py-2 rounded-pill mb-3">PWEB-A 2026</span>
                <h1 class="display-4 fw-800 mb-2">Project Dashboard</h1>
                <p class="lead text-white-50">
                    "Semangat pagi, Sandhika! Mari kita lihat kemajuan belajar dan karya-karya luar biasa yang telah kamu susun di sini."
                </p>
            </div>
            <div class="col-lg-5 text-lg-end d-flex align-items-center justify-content-lg-end">
                <div class="p-3 rounded-4 border border-secondary bg-dark shadow-sm">
                    <div class="d-flex align-items-center gap-3 text-start">
                        <div class="bg-primary rounded-circle" style="width: 10px; height: 10px;"></div>
                        <div>
                            <div class="small opacity-50">Identitas Mahasiswa</div>
                            <div class="fw-bold">M. Sandhika Setiawan - 5026241043</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bento-container">

            <div class="bento-item animate__animated animate__fadeInUp">
                <div>
                    <div class="icon-box text-info"><i class="bi bi-file-earmark-code"></i></div>
                    <h4>Pertemuan 1</h4>
                    <p class="desc">Dasar-dasar HTML, heading, paragraf, dan struktur dokumen web.</p>
                </div>
                <a href="{{ url('/tugas/pertemuan-1') }}" class="btn-action">Lihat Hasil <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="bento-item animate__animated animate__fadeInUp" style="animation-delay: 0.1s;">
                <div>
                    <div class="icon-box text-warning"><i class="bi bi-palette"></i></div>
                    <h4>Pertemuan 2</h4>
                    <p class="desc">Mengenal CSS Styling, warna, font, dan margin-padding pada sebuah halaman web yang dibuat dengan HTML.</p>
                </div>
                <a href="{{ url('/tugas/pertemuan-2') }}" class="btn-action">Lihat Hasil <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="bento-item item-large featured-bg animate__animated animate__zoomIn" style="animation-delay: 0.2s;">
                <div>
                    <div class="icon-box shadow-lg text-white"><i class="bi bi-laptop"></i></div>
                    <h2 class="fw-bold text-white">Pertemuan 5: DELL Technologies</h2>
                    <p class="text-white opacity-75 mt-3">Tugas landing page eksklusif dengan kustomisasi Arsha Template, mencakup CSS tingkat lanjut, animasi AOS, dan integrasi asset eksternal.</p>
                </div>
                <a href="{{ url('/tugas/pertemuan-5') }}" class="btn-action shadow-sm">Buka Pertemuan 5 <i class="bi bi-arrow-right-circle-fill"></i></a>
            </div>

            <div class="bento-item animate__animated animate__fadeInUp" style="animation-delay: 0.3s;">
                <div>
                    <div class="icon-box text-warning"><i class="bi bi-filetype-css"></i></div>
                    <h4>Pertemuan 2.1</h4>
                    <p class="desc">Mengenal CSS Styling, warna, font, dan margin-padding pada sebuah halaman web yang dibuat dengan HTMLdengan Syle CSS yang terpisah dari file HTML.</p>
                </div>
                <a href="{{ url('/tugas/pertemuan-2.1') }}" class="btn-action">Lihat Hasil <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="bento-item animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                <div>
                    <div class="icon-box text-primary"><i class="bi bi-bootstrap"></i></div>
                    <h4>Tugas Mandiri Pertemuan 3</h4>
                    <p class="desc">Latihan implementasi Grid System pada Bootstrap 4 secara mendalam.</p>
                </div>
                <a href="{{ url('/tugas/tugas-pertemuan-3') }}" class="btn-action">Buka Tugas <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="bento-item item-wide animate__animated animate__fadeInUp" style="animation-delay: 0.5s;">
                <div class="d-flex flex-column flex-md-row align-items-center gap-4">
                    <div class="icon-box text-success mb-0" style="min-width: 56px;"><i class="bi bi-phone"></i></div>
                    <div class="flex-grow-1">
                        <h4>Pertemuan 3: Responsive Design</h4>
                        <p class="desc">Mempelajari cara membuat website yang berbentuk grid responsif menggunakan framework CSS seperti Bootstrap.</p>
                    </div>
                    <div style="min-width: 180px;">
                        <a href="{{ url('/tugas/pertemuan-3') }}" class="btn-action mt-md-0">Buka Tugas <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="bento-item item-wide animate__animated animate__fadeInUp" style="animation-delay: 0.6s;">
                <div class="d-flex flex-column flex-md-row align-items-center gap-4">
                    <div class="icon-box text-light mb-0" style="min-width: 56px;"><i class="bi bi-file-earmark-code-fill"></i></div>
                    <div class="flex-grow-1">
                        <h4>Pertemuan 3.1</h4>
                        <p class="desc">Merupakan sebuah template dari penggunaan Boostrap 4 agar bisa digunakan untuk pertemuan selanjutnya.</p>
                    </div>
                    <div style="min-width: 180px;">
                        <a href="{{ url('/tugas/pertemuan-3.1') }}" class="btn-action mt-md-0">Lihat Template <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="bento-item animate__animated animate__fadeInUp" style="animation-delay: 0.7s;">
                <div>
                    <div class="icon-box text-danger"><i class="bi bi-braces"></i></div>
                    <h4>Pertemuan 4</h4>
                    <p class="desc">Pembuatan sebuah halaman web sederhana dengan tema bebas menggunakan HTML dan CSS, dengan Grid System menggunakan Teori dari Boostrap 4.</p>
                </div>
                <a href="{{ url('/tugas/pertemuan-4') }}" class="btn-action">Lihat Hasil <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="bento-item animate__animated animate__fadeInUp" style="animation-delay: 0.8s;">
                <div>
                    <div class="icon-box text-light"><i class="bi bi-share-fill"></i></div>
                    <h4>Tugas Mandiri Pertemuan 5</h4>
                    <p class="desc">Pembuatan sebuah modifikasi website Linktree yang telah di cari dnegan menggunakan implemetasi dari Bootstrap 4.</p>
                </div>
                <a href="{{ url('/tugas/tugas-pertemuan-5') }}" class="btn-action">Buka Tugas <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="bento-item item-wide animate__animated animate__fadeInUp" style="animation-delay: 0.9s;">
                <div class="d-flex flex-column flex-md-row align-items-center gap-4">
                    <div class="icon-box text-light mb-0" style="min-width: 56px;"><i class="bi bi-collection-fill"></i></div>
                    <div class="flex-grow-1">
                        <h4>Pertemuan 5.1</h4>
                        <p class="desc">Merupakan sebuah pusat dari pengumpulan semua tugas yang ada pada pertemuan 5, yang mana tugas tersebut merupakan sebuah landing page dengan tema DELL Technologies dengan menggunakan template Arsha dan juga Website modifikasi Linktree dengan menggunakan Bootstrap 4.</p>
                    </div>
                    <div style="min-width: 180px;">
                        <a href="{{ url('/tugas/pertemuan-5.1') }}" class="btn-action mt-md-0">Lihat Hasil <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <footer class="mt-5 pt-5 border-top border-secondary text-center opacity-50">
            <p class="small">&copy; 2026 Muhammad Sandhika Setiawan • NRP 5026241043 • Built with Laravel 11.x</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
