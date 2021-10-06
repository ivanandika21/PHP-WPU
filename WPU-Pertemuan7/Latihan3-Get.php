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
        <h1>Get</h1>
        <ul>
            <?php foreach($mahasiswa as $mhs) : ?>
                <li>
                    <a href="tampilGet.php?nama=<?= $mhs["nama"];?>&nim=<?= $mhs["nim"];?>&progdi=<?= $mhs["progdi"];?>&email=<?= $mhs["email"];?>&foto=<?= $mhs["foto"];?>"><?= $mhs["nama"]; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>