<?php
    $mahasiswa = [
        [
        "nama" => "Ivan Andika Surya",
        "nim" => "672019171",
        "progdi" => "Teknik Informatika",
        "email" => "ivanandikasurya21@gmail.com",
        "foto" => "profil1.jpg"
        ],
        [
        "nim" => "672019717",
        "nama" => "Ivan Andika",
        "progdi" => "Desain Komunikasi Visual",
        "email" => "ivanandika21@gmail.com",
        "foto" => "profil2.jpg"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MahasiswaGET</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <?php foreach($mahasiswa as $mhs) : ?>
            <ul>
                <li>
                    <a href="/Mahasiswa1.php"><img src="images/<?= $mhs["foto"]; ?>" alt=""></a>
                </li>
                <li><?= $mhs["nama"]; ?></li>
                <li><?= $mhs["nim"]; ?></li>
            </ul>
        <?php endforeach; ?>
    </body>
</html>