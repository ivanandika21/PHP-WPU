<?php
    // Date
    // Digunakan untuk menampilkan tanggal dalam format tertentu
    echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH time
    echo "<br><br>".time();

    // Coba gabung
    echo "<br><br>".date("l", time()+172800); // 2 hari lagi
    echo "<br>".date("l", time()+60*60*24*99); // 99 hari lagi

    // mktime
    // Membuat sendiri detik
    // mktime (0, 0, 0, 0, 0, 0)
    // clue: jam, menit, detik, bulan, tanggal, tahun
    echo "<br><br>".mktime(0, 0, 0, 11, 21, 2000); // sudah berapa detik sejak tanggal itu
    echo "<br>".date("l", mktime(0, 0, 0, 11, 21, 2000)); // hari apa tanggal tersebut?

    // strtotime
    echo "<br><br>".strtotime("21 nov 2000");
    echo "<br>".date("l", strtotime("21 nov 2000"));
?>
