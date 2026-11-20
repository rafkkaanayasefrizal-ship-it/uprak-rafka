-- Database: db_kopi_member
-- Tabel: tb_pelanggan

CREATE DATABASE IF NOT EXISTS `db_kopi_member`;
USE `db_kopi_member`;

DROP TABLE IF EXISTS `tb_pelanggan`;
CREATE TABLE `tb_pelanggan` (
    `id_pelanggan` INT AUTO_INCREMENT PRIMARY KEY,
    `nama_lengkap` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL UNIQUE,
    `no_hp` VARCHAR(20) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `status_member` ENUM('Aktif', 'Nonaktif') DEFAULT 'Aktif',
    `tanggal_daftar` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data Dummy Awal
-- Catatan kata sandi:
-- user 1 (budi@gmail.com): password 'kopi123' (hash md5: 298b4b75567b14d24ee4e8ddff4bf190)
-- user 2 (siti@gmail.com): password 'senja123' (hash md5: 86b16524316d801d931be6f194fa8ec6)
-- user 3 (andi@gmail.com): password 'nusantara' (hash md5: d274f85e493f2f1118fa300ec091c53d)

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_lengkap`, `email`, `no_hp`, `password`, `status_member`, `tanggal_daftar`) VALUES
(1, 'Budi Santoso', 'budi@gmail.com', '081234567891', MD5('kopi123'), 'Aktif', '2026-11-01 08:30:00'),
(2, 'Siti Nurhaliza', 'siti@gmail.com', '081298765432', MD5('senja123'), 'Aktif', '2026-11-03 10:15:00'),
(3, 'Andi Wijaya', 'andi@gmail.com', '085711223344', MD5('nusantara'), 'Nonaktif', '2026-11-05 14:00:00');
