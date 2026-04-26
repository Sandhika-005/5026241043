<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas BS4 List Gropus_5026241043</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&family=Oswald:wght@200..700&display=swap"
        rel="stylesheet">

    <style>
        body {
            background-color: #f0f2f5;
            background-image: radial-gradient(#d1d9e6 1px, transparent 1px);
            background-size: 20px 20px;
            font-family: 'Open Sans', sans-serif;
            color: #334e68;
            padding-bottom: 80px;
        }

        .container {
            margin-top: 50px;
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
            border: 1px solid #ffffff;
        }

        .open-sans-judul {
            font-weight: 800;
            color: #102a43;
            letter-spacing: -0.02em;
            margin-bottom: 0;
            text-align: center;
        }

        h2 {
            font-family: 'Oswald', sans-serif;
            font-size: 1.4rem;
            color: #243b53;
            margin-top: 10px;
            border-left: 4px solid #334e68;
            padding-left: 12px;
        }

        p {
            color: #627d98;
            font-size: 0.95rem;
        }

        .list-group {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.02);
        }

        .list-group-item {
            transition: all 0.3s ease;
            border: 1px solid #f0f4f8;
        }

        .list-group-item-action:hover {
            background-color: #243b53 !important;
            color: #ffffff !important;
            padding-left: 30px;
        }

        .list-group-item.active {
            background-color: #334e68;
            border-color: #334e68;
            font-weight: 600;
        }

        .badge-primary {
            background-color: #486581;
            padding: 6px 10px;
            font-weight: 400;
        }

        .list-group-item-success {
            background-color: #d1fae5;
            color: #065f46;
        }

        .list-group-item-danger {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .list-group-item-warning {
            background-color: #fef3c7;
            color: #92400e;
        }

        .list-group-item-info {
            background-color: #e0f2fe;
            color: #075985;
        }

        .list-group-item-primary {
            background-color: #e0e7ff;
            color: #3730a3;
        }

        .list-group-item-dark {
            background-color: #334e68;
            color: #f0f4f8;
        }

        .list-group-horizontal .list-group-item {
            margin-right: 5px;
            border-radius: 8px !important;
        }

        hr {
            border-top: 2px solid #f0f4f8;
            margin: 40px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="open-sans-judul">Tugas BS4 List Gropus_5026241043</h1>
        <h3 class="open-sans-judul">Dashboard Restoran Cepat Saji</h3>
        <p class="text-center">Sistem Monitoring Operasional Digital</p>
        <hr>

        <div class="row">
            <div class="col-md-6 mb-4">
                <h2>Menu Favorit Hari Ini</h2>
                <p>Daftar menu yang paling disukai pelanggan hari ini</p>
                <ul class="list-group">
                    <li class="list-group-item">Ayam Goreng Krispi</li>
                    <li class="list-group-item">Burger Sapi Spesial</li>
                    <li class="list-group-item">Kentang Goreng Jumbo</li>
                </ul>
            </div>
            <div class="col-md-6 mb-4">
                <h2>Status Pesanan Terkini</h2>
                <p>Informasi terkini tentang status pesanan pelanggan</p>
                <ul class="list-group">
                    <li class="list-group-item active">Sedang Dimasak</li>
                    <li class="list-group-item">Menunggu Kurir</li>
                    <li class="list-group-item">Dalam Perjalanan</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <h2>Navigasi Pengguna</h2>
                <p>Link cepat untuk akses fitur utama aplikasi</p>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Lihat Riwayat Transaksi</a>
                    <a href="#" class="list-group-item list-group-item-action">Ganti Metode Pembayaran</a>
                    <a href="#" class="list-group-item list-group-item-action">Hubungi Customer Service</a>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <h2>Promo Tidak Tersedia</h2>
                <p>Daftar promo yang telah melewati masa berlaku atau sedang dalam periode non-aktif</p>
                <div class="list-group">
                    <a href="#" class="list-group-item disabled">Promo Sarapan Pagi (Berakhir)</a>
                    <a href="#" class="list-group-item disabled">Diskon Tengah Malam (Berakhir)</a>
                    <a href="#" class="list-group-item">Promo Gajian (Tersedia Besok)</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <h2>Kategori Menu Utama</h2>
                <p>Klasifikasi menu restoran berdasarkan jenis hidangan untuk mempermudah pengecekan stok</p>
                <div class="container-fluid p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Makanan Berat</li>
                        <li class="list-group-item">Minuman Dingin</li>
                        <li class="list-group-item">Camilan Gurih</li>
                        <li class="list-group-item">Pencuci Mulut</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <h2>Metode Pembayaran</h2>
                <p>Kanal pembayaran digital yang terintegrasi dengan sistem kasir saat ini</p>
                <ul class="list-group list-group-horizontal flex-wrap">
                    <li class="list-group-item">Transfer Bank</li>
                    <li class="list-group-item">E-Wallet</li>
                    <li class="list-group-item">Kartu Kredit</li>
                    <li class="list-group-item">Tunai</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <h2>Status Inventaris Gudang</h2>
                <p>Ringkasan kondisi stok bahan baku utama untuk operasional harian</p>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success">Stok Beras: Aman</li>
                    <li class="list-group-item list-group-item-secondary">Stok Tisu: Cukup</li>
                    <li class="list-group-item list-group-item-info">Stok Saus: Sedang Diantar</li>
                    <li class="list-group-item list-group-item-warning">Stok Minyak: Hampir Habis</li>
                    <li class="list-group-item list-group-item-danger">Stok Daging: Kosong</li>
                    <li class="list-group-item list-group-item-primary">Update Mingguan Selesai</li>
                    <li class="list-group-item list-group-item-dark">Arsip Data Tahun Lalu</li>
                    <li class="list-group-item list-group-item-light">Laporan Kebersihan Harian</li>
                </ul>
            </div>
            <div class="col-md-6 mb-4">
                <h2>Aksi Manajemen Cabang</h2>
                <p>Panel kendali cepat untuk operasional harian dan administrasi manajemen cabang</p>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Buka Laporan Penjualan</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-success">Approve Cuti
                        Karyawan</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Cek Log
                        Absensi</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-info">Kirim Email
                        Broadcast</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Revisi Jadwal
                        Shift</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Batalkan Pesanan
                        Error</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Tambah Menu
                        Baru</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Pengaturan
                        Keamanan</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-light">Cetak Struk
                        Ulang</a>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <h2>Notifikasi Aplikasi</h2>
            <p>Antrean pesan sistem dan pembaruan data yang memerlukan tindak lanjut segera</p>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pesanan Masuk
                    <span class="badge badge-primary badge-pill">25</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Review Pelanggan Baru
                    <span class="badge badge-primary badge-pill">60</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Komplain Belum Teratasi
                    <span class="badge badge-primary badge-pill">30</span>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
