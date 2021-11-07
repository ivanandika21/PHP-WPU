<?php
    // membuat koneksi ke db
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    function query($query){
        global $conn;
        
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn;
        
        $nama = htmlspecialchars($data["nama"]);
        $nrp = htmlspecialchars($data["nrp"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "INSERT INTO mahasiswa
        VALUES
        ('', '$nama', '$nrp', '$jurusan', '$gambar')
        ";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function hapus($id) {
        global $conn;

        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        global $conn;
        
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $nrp = htmlspecialchars($data["nrp"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nrp = '$nrp',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE id = $id
                ";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function cari($keyword){
        $query = "SELECT * FROM mahasiswa WHERE
                nama LIKE '%$keyword%' OR
                nrp LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
        ";

        return query($query);
    }
?>