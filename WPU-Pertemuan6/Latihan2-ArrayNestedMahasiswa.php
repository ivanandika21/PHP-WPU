<?php
    // $mahasiswa = [
    //     ["Ivan Andika Surya","672019171","Teknik Informatika","ivanandikasurya21@gmail.com"],
    //     ["Ivan Andika","672019717","Desain Komunikasi Visual","ivanandika21@gmail.com"]
    // ];

    // Array Associative
    // definisi: sama seperti array numerik, namun "key" nya adalah string custom
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
    <title>ArrayNested</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php
        // echo $mahasiswa[1]["nama"];
        // echo $mahasiswa[1]["progdi"];
    ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"] ?></li>
            <li>NIM : <?= $mhs["nim"] ?></li>
            <li>Progdi : <?= $mhs["progdi"] ?></li>
            <li>Email : <?= $mhs["email"] ?></li>
            <li>
                <img src="images/<?= $mhs["foto"]; ?>">
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>