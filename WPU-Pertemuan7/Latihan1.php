<?php
    // Variable Scope / lingkup variabel
    $x = 10;
    function tampilx() {
        global $x;
        //$x = 20;
        echo $x;
    }
    tampilx();
    echo "<br>".$x."<br>";

    echo "<br>".$_SERVER["SERVER_NAME"]."<br>";

    // $_GET
    $_GET["nama"] = "Ivan Andika Surya";
    $_GET["nrp"] = "672019171";
    var_dump($_GET);

    // $_POST
    // mirip get namun tidak muncul di url
?>