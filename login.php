<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Member Kopi Nusantara</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f4efe6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .auth-card {
            background-color: #ffffff;
            width: 100%;
            max-width: 420px;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(78, 52, 46, 0.12);
            border: 1px solid #e0d5c1;
        }
        .brand-header {
            text-align: center;
            margin-bottom: 25px;
        }
        .brand-header h2 {
            color: #4e342e;
            font-size: 24px;
            margin-bottom: 6px;
        }
        .brand-header p {
            color: #795548;
            font-size: 14px;
        }
        .alert-box {
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 13px;
            margin-bottom: 20px;
            background-color: #ffebee;
            color: #c62828;
            border: 1px solid #ffcdd2;
            display: block;
        }
        .form-group {
            margin-bottom: 18px;
        }
        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-size: 13px;
            font-weight: 600;
            color: #4e342e;
        }
        .form-control {
            width: 100%;
            padding: 11px 14px;
            border: 1.5px solid #d7ccc8;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.2s, box-shadow 0.2s;
            outline: none;
        }
        .form-control:focus {
            border-color: #6d4c41;
            box-shadow: 0 0 0 3px rgba(109, 76, 65, 0.15);
        }
        .btn-submit {
            width: 100%;
            padding: 12px;
            background-color: #4e342e;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
            margin-top: 10px;
        }
        .btn-submit:hover {
            background-color: #3e2723;
        }
        .auth-footer {
            margin-top: 22px;
            text-align: center;
            font-size: 13px;
            color: #6d4c41;
        }
        .auth-footer a {
            color: #8d6e63;
            text-decoration: none;
            font-weight: 600;
        }
        .auth-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="auth-card">
        <div class="brand-header">
            <h2>Kopi Nusantara</h2>
            <p>Portal Loyalitas & Pemesanan Member</p>
        </div>

        <div class="alert-box">
            <span>Pesan notifikasi sistem ditampilkan di sini</span>
        </div>

        <form action="" method="POST">
            <div class="form-group">
                <label>Email Terdaftar</label>
                <input type="email" class="form-control" placeholder="nama@email.com" required>
            </div>

            <div class="form-group">
                <label>Kata Sandi</label>
                <input type="password" class="form-control" placeholder="Masukkan kata sandi" required>
            </div>

            <button type="submit" class="btn-submit">Masuk ke Akun</button>
        </form>

        <div class="auth-footer">
            Belum menjadi member? <a href="register.php">Daftar sekarang</a>
        </div>
    </div>

</body>
</html>