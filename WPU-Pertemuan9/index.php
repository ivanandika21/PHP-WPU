<?php
    // membuat koneksi ke db
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // mengambil data dari tabel mahasiswa
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    if (!$result) echo mysqli_error($conn);

    // mengambil data (fetch) mahasiswa dari object result
    // mysqli_fetch_row()
    // mysqli_fetch_assoc()
    // mysqli_fetch_array()
    // mysqli_fetch_object()

    // $mhs = mysqli_fetch_row($result); // mengembalikan numerik
    // var_dump($mhs);

    // $mhs = mysqli_fetch_assoc($result); // mengembalikan asso
    // var_dump($mhs);

    // $mhs = mysqli_fetch_array($result); // mengembalikan numerik dan asso
    // var_dump($mhs);
    
    // $mhs = mysqli_fetch_object($result); // mengembalikan numerik dan asso
    // var_dump($mhs->nama);
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
        <?php while($mhs = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $mhs["id"]; ?></td>
            <td>
                <a href="">Ubah</a>
                <a href="">Hapus</a>
            </td>
            <td><img src="./images/profil1.jpg" alt="" width="50"></td>
            <td><?= $mhs["nrp"]; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["jurusan"]; ?></td>
        </tr>
        <?php $i++; endwhile; ?>
    </table>
</body>

</html>