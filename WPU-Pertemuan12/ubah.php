<?php
    require 'functions.php';

    // ambil data di url
    $id = $_GET["id"];

    // query data mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
        // var_dump($mhs);
    
    if(isset($_POST["submit"])){
        if(ubah($_POST) > 0) {
            echo "<script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>";
        } else {
            echo "<script>
                    alert('Data gagal diubah!');
                    document.location.href = 'index.php';
                </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="" method="post">
        <ul>
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
            <li>
                <label for="nrp">NRP</label>
                <input type="text" name="nrp" id="nrp" value="<?= $mhs["nrp"]; ?>" required>
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>" required>
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>" required>
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>" required>
            </li>
            <li>
                <button type="submit" name="submit">Simpan</button>
            </li>
        </ul>
    </form>
</body>

</html>