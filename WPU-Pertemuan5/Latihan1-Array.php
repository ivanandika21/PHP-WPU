<?php
    // Array
    // Variabel yang dapat memiliki banyak nilai dan tipe data berbeda sekaligus

    // Membuat Array
    // cara lama
    $hari = array("Senin", "Selasa", "Rabu");
    // cara baru
    $bulan= ["Januari", "Februari", "Maret"];

    // Menampilkan Array
    // var_dump() / print_r()
    var_dump($bulan);
    echo "<br>";
    print_r($bulan);

    // Menampilkan 1 elemen array
    echo "<br><br>";
    echo $bulan[0];
    echo "<br>";
    echo $bulan[1];

    // Menambahkan elemen baru pada array
    echo "<br><br>";
    var_dump($bulan);
    $bulan[] = "November";
    echo "<br>";
    var_dump($bulan);
?>