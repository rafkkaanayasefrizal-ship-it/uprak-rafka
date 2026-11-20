<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Member - Kopi Nusantara</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f7f5f0;
            color: #333333;
        }
        .navbar {
            background-color: #4e342e;
            padding: 16px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #ffffff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .navbar-brand h2 {
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        .navbar-user {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .navbar-user span {
            font-size: 14px;
            color: #d7ccc8;
        }
        .btn-logout {
            background-color: #c62828;
            color: #ffffff;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
            transition: background-color 0.2s;
        }
        .btn-logout:hover {
            background-color: #b71c1c;
        }
        .container {
            max-width: 960px;
            margin: 35px auto;
            padding: 0 20px;
        }
        .welcome-banner {
            background: linear-gradient(135deg, #6d4c41, #3e2723);
            color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 6px 18px rgba(62, 39, 35, 0.15);
        }
        .welcome-banner h1 {
            font-size: 26px;
            margin-bottom: 8px;
        }
        .welcome-banner p {
            color: #efebe9;
            font-size: 14px;
        }
        .grid-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .info-card {
            background: #ffffff;
            padding: 24px;
            border-radius: 10px;
            border: 1px solid #e0d5c1;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }
        .info-card h4 {
            color: #795548;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 12px;
        }
        .info-card .card-value {
            font-size: 24px;
            font-weight: 700;
            color: #4e342e;
            margin-bottom: 6px;
        }
        .badge-status {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            background-color: #e8f5e9;
            color: #2e7d32;
        }
        .section-box {
            background: #ffffff;
            padding: 26px;
            border-radius: 10px;
            border: 1px solid #e0d5c1;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }
        .section-box h3 {
            color: #4e342e;
            font-size: 18px;
            margin-bottom: 16px;
            padding-bottom: 10px;
            border-bottom: 1px solid #efebe9;
        }
        .benefit-list {
            list-style: none;
        }
        .benefit-item {
            padding: 12px 0;
            border-bottom: 1px solid #f4efe6;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            color: #5d4037;
        }
        .benefit-item:last-child {
            border-bottom: none;
        }
        .benefit-number {
            width: 26px;
            height: 26px;
            border-radius: 50%;
            background-color: #d7ccc8;
            color: #4e342e;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 12px;
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="navbar-brand">
            <h2>Kopi Nusantara</h2>
        </div>
        <div class="navbar-user">
            <span>Masuk sebagai: <strong>Pelanggan Setia</strong> (pelanggan@email.com)</span>
            <a href="logout.php" class="btn-logout">Keluar</a>
        </div>
    </nav>

    <div class="container">
        <div class="welcome-banner">
            <h1>Selamat Datang Kembali, Nama Pelanggan!</h1>
            <p>Terima kasih telah menjadi bagian dari keluarga penikmat Kopi Nusantara.</p>
        </div>

        <div class="grid-info">
            <div class="info-card">
                <h4>Status Keanggotaan</h4>
                <div class="card-value">Aktif</div>
                <span class="badge-status">Member Terverifikasi</span>
            </div>
            <div class="info-card">
                <h4>Nomor Kontak Terdaftar</h4>
                <div class="card-value">081234567890</div>
                <p style="font-size: 12px; color: #8d6e63;">Digunakan untuk verifikasi penukaran promo kafe.</p>
            </div>
        </div>

        <div class="section-box">
            <h3>Daftar Hak Istimewa Member Aktif</h3>
            <ul class="benefit-list">
                <li class="benefit-item">
                    <div class="benefit-number">1</div>
                    <div>Diskon 15% setiap pembelian di hari ulang tahun member.</div>
                </li>
                <li class="benefit-item">
                    <div class="benefit-number">2</div>
                    <div>Gratis upgrade ukuran gelas (Reguler ke Large) setiap hari Jumat.</div>
                </li>
                <li class="benefit-item">
                    <div class="benefit-number">3</div>
                    <div>Akses lebih awal untuk peluncuran menu musiman varian single origin.</div>
                </li>
                <li class="benefit-item">
                    <div class="benefit-number">4</div>
                    <div>Undangan eksklusif sesi cupping coffee bulanan bersama barista utama.</div>
                </li>
            </ul>
        </div>
    </div>

</body>
</html>