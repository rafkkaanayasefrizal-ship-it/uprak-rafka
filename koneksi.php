<?php
session_start();

$koneksi="mysql:host=localhost;dbname=db_kopi_member;";
try {
    $konfig= new PDO($koneksi,"root","");
} catch (PDOException $e) {
    $error= $e -> getMessage();
}
?>