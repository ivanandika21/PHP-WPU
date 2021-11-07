<?php
    require 'functions.php';
    
    if(isset($_POST["submit"])){
    //     // var_dump($_POST);
        
    //     // cek apakah data berhasil ditambahkan atau tidak
    //     if(mysqli_affected_rows($conn) > 0) echo "Berhasil";
    //     else echo "Gagal"."<br>".mysqli_error($conn);

    //     if(tambah($_POST) > 0) echo "Berhasil";
    //     else echo "Gagal"."<br>".mysqli_error($conn);

        if(tambah($_POST) > 0) {
            echo "<script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>";
        } else {
            echo "<script>
                    alert('Data gagal ditambahkan!');
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
            <li>
                <label for="nrp">NRP</label>
                <input type="text" name="nrp" id="" required>
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Simpan</button>
            </li>
        </ul>
    </form>
</body>

</html>