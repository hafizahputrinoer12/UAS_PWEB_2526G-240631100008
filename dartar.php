<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <h2>Daftar Data Mahasiswa</h2>

    <a class="btn-tambah" href="tambah.php">
        Tambah Data
    </a>

    <br><br>

    <table>

        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php

        $no = 1;

        $data = mysqli_query($conn, "SELECT * FROM mahasiswa");

        while($d = mysqli_fetch_array($data)){

        ?>

        <tr>

            <td><?= $no++; ?></td>
            <td><?= $d['nim']; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['jurusan']; ?></td>
            <td><?= $d['alamat']; ?></td>

            <td>

                <a class="btn-edit"
                   href="edit.php?id=<?= $d['id']; ?>">
                   Edit
                </a>

                <a class="btn-hapus"
                   href="hapus.php?id=<?= $d['id']; ?>"
                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                   Hapus
                </a>

            </td>

        </tr>

        <?php } ?>

    </table>

    <br><br>

    <a class="btn-kembali" href="index.php">
        Kembali ke Home
    </a>

</div>

</body>
</html>
