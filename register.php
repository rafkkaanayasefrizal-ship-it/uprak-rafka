<?php
include "koneksi.php";
if (isset($_POST['masuk'])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no = $_POST['noHp'];
    $password = $_POST['password'];
    $ulangi = $_POST['ulangi'];


    $passwordhas=password_hash($password,PASSWORD_DEFAULT);
    if (empty($nama) || empty($email) || empty($no) || empty($password)) {
        $error = "harap isi semua field";
    } else {
        if ($password != $ulangi) {
          $error = "password harus sama dengan ulangi password";
        } else {
            if (strlen($password) < 6) {
                $error = "password harus lebih dari 6 karakter";
            } else {
                if (ctype_alpha($password) || ctype_digit($password)) {
                    $error = "harus terdiri huruf dan angka";
                } else {
                    $query = "SELECT * FROM tb_pelanggan WHERE email=:email limit 1";
                    $komando = $konfig->prepare($query);
                    $komando->execute([':email' => $email]);
                    if ($komando->rowCount() > 0) {
                        $error = "email sudah terdaftar";
                    } else {
                         $query = "insert into tb_pelanggan(nama_lengkap,email,no_hp,password)values(:nama_lengkap,:email,:no_hp,:password)";
                    $komando = $konfig->prepare($query);
                    $komando->execute([
                        ':nama_lengkap' => $nama,
                        ':email' => $email,
                        ':no_hp' => $no,
                        ':password' => password_hash("admin12",PASSWORD_DEFAULT)

                    ]);
                     header("location:login.php");


                    }
                   


                  
                }
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Member - Kopi Nusantara</title>
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
            padding: 25px 20px;
        }

        .auth-card {
            background-color: #ffffff;
            width: 100%;
            max-width: 480px;
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
            background-color: #e8f5e9;
            color: #2e7d32;
            border: 1px solid #c8e6c9;
            display: block;
        }

        .form-group {
            margin-bottom: 16px;
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
            padding: 10px 14px;
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

        .form-row {
            display: flex;
            gap: 12px;
        }

        .form-row .form-group {
            flex: 1;
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
            <p>Formulir Pendaftaran Member Baru</p>
        </div>
<?php if(isset($error)):?>
        <div class="alert-box">
            <span> peringatan<?=  $error; ?></span>
        </div>
<?php endif;?>
        <form action="" method="POST">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Contoh: Budi Santoso">
            </div>

            <div class="form-group">
                <label>Alamat Email</label>
                <input type="email" name="email" class="form-control" placeholder="nama@email.com">
            </div>

            <div class="form-group">
                <label>Nomor WhatsApp / HP</label>
                <input type="tel" name="noHp" class="form-control" placeholder="081234567890">
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Kata Sandi</label>
                    <input type="password" name="password" class="form-control" placeholder="Minimal 6 karakter">
                </div>
                <div class="form-group">
                    <label>Ulangi Sandi</label>
                    <input type="password" name="ulangi" class="form-control" placeholder="Ketik ulang kata sandi">
                </div>
            </div>

            <button type="submit" name="masuk" class="btn-submit">Daftarkan Akun Member</button>
        </form>

        <div class="auth-footer">
            Sudah memiliki akun member? <a href="login.php">Masuk di sini</a>
        </div>
    </div>

</body>

</html>