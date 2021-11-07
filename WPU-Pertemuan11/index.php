<?php
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <a href="tambah.php">Tambah Data</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nrp</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $mhs["id"]; ?></td>
            <td>
                <a href="ubah.php?id=<?= $mhs["id"]; ?>">Ubah</a>
                <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Hapus?');">Hapus</a>
            </td>
            <td><img src="./images/profil1.jpg" alt="" width="50"></td>
            <td><?= $mhs["nrp"]; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["jurusan"]; ?></td>
        </tr>
        <?php $i++; endforeach; ?>
    </table>
</body>

</html>