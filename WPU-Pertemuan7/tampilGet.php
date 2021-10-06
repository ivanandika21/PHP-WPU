<?php
    if(!isset($_GET["nama"])
    || !isset($_GET["nim"])
    || !isset($_GET["progdi"])
    || !isset($_GET["email"])
    || !isset($_GET["foto"])) {
        // redirect
        header("Location: Latihan3-Get.php");
        exit;
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>tampilGet</title>
</head>
<body>
    <ul>
        <li><img src="images/<?= $_GET["foto"]; ?>" alt=""></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nim"]; ?></li>
        <li><?= $_GET["progdi"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
    </ul>
    <a href="Latihan3-Get.php">Kembali ke awal</a>
</body>
</html>