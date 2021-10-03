<?php
    function salam($waktu = "datang", $nama) { // nilai default parameter dapat didefinisikan dengan =
        return "Selamat $waktu, $nama";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Function</title>
</head>
<body>
    <h1>
        <?php
            date_default_timezone_set('Asia/Jakarta');
            
            $jam = idate("H");
            if($jam <= 11){
                echo salam("pagi", "Ivan");
            } else if($jam <= 14){
                echo salam("siang", "Ivan");
            } else if($jam <= 18){
                echo salam("sore", "Ivan");
            } else if($jam <= 5){
                echo salam("malam", "Ivan");
            }
        ?>
    </h1>
</body>
</html>