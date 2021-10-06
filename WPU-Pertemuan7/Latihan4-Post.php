<!DOCTYPE html>
<html lang="en">
<head>
    <title>Post</title>
</head>
<body>
    <?php
        //coba tampil di halaman ini langsung
        // if(isset($_POST["nama"])){
        //     echo "<h1>Selamat datang, ".$_POST["nama"]."</h1>";
        // }
    ?>
    <form action="tampilPost.php" method="post">
        Masukkan nama :
        <input type="text" name="nama">
        <input type="submit" name="submit">
    </form>
</body>
</html>