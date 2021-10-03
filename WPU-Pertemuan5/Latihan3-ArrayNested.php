<?php
    $mahasiswa = [
        ["Ivan Andika Surya","672019171","Teknik Informatika","ivanandikasurya21@gmail.com"],
        ["Ivan Andika","672019717","Desain Komunikasi Visual","ivanandika21@gmail.com"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ArrayNested</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs[0] ?></li>
        <li>NIM : <?= $mhs[1] ?></li>
        <li>Progdi : <?= $mhs[2] ?></li>
        <li>Email : <?= $mhs[3] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>