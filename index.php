<?php
include 'koneksi.php';
include 'functions.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home - Sistem Pendataan Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <h1>🎓 Sistem Pendataan Mahasiswa</h1>

    <p>
        Selamat datang di aplikasi Sistem Pendataan Mahasiswa.
        Aplikasi ini digunakan untuk menambah, melihat, mengubah,
        dan menghapus data mahasiswa.
    </p>

    <br>

    <h3>Total Data Mahasiswa</h3>

    <h1><?= jumlahData($conn); ?></h1>

    <br>

    <div class="menu">

        <a class="btn-tambah" href="tambah.php">
            ➕ Tambah Data
        </a>

        <a class="btn-lihat" href="daftar.php">
            📋 Lihat Data
        </a>

    </div>

    <br><br>

    <div class="footer">
        <p>© 2026 | Pemrograman Web | UAS Putri Noer Hafizah 240631100008 </p>
    </div>

</div>

</body>
</html>
