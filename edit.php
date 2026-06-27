<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <h2>✏️ Edit Data Mahasiswa</h2>

    <form action="update.php" method="POST">

        <input type="hidden" name="id" value="<?= $d['id']; ?>">

        <label>NIM</label>
        <input type="text" name="nim" value="<?= $d['nim']; ?>" required>

        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" value="<?= $d['nama']; ?>" required>

        <label>Jurusan</label>
        <input type="text" name="jurusan" value="<?= $d['jurusan']; ?>" required>

        <label>Alamat</label>
        <textarea name="alamat" rows="4" required><?= $d['alamat']; ?></textarea>

        <button type="submit">💾 Update Data</button>

    </form>

    <br>

    <a class="btn-kembali" href="index.php">
        ⬅️ Kembali ke Home
    </a>

</div>

</body>
</html>
