<?php
    // Perulangan pada Array
    // for / foreach
    $angka = [2,12,3,51,8,97,41,4,21];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ArrayPerulangan</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: lightskyblue;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php for($i = 0; $i < count($angka); $i++){ ?>
          <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach($angka as $a) { ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach($angka as $a) { ?>
        <div class="kotak"><?= $a; ?></div>
    <?php } ?>
</body>
</html>