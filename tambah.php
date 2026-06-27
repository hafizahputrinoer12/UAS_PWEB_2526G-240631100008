<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <h2>➕ Tambah Data Mahasiswa</h2>

    <form action="simpan.php" method="POST">

        <label>NIM</label>
        <input type="text" name="nim" placeholder="Masukkan NIM" required>

        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" placeholder="Masukkan Nama Mahasiswa" required>

        <label>Jurusan</label>
        <input type="text" name="jurusan" placeholder="Masukkan Jurusan" required>

        <label>Alamat</label>
        <textarea name="alamat" rows="4" placeholder="Masukkan Alamat Mahasiswa" required></textarea>

        <button type="submit">💾 Simpan Data</button>

    </form>

    <br>

    <a class="btn-kembali" href="index.php">
        ⬅️ Kembali ke Home
    </a>

</div>

</body>
</html>
