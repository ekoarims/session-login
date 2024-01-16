<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <form action="" method="post" name="input">
        Input NPM : <input type="text" name="npm"><br>
        Input Nama : <input type="text" name="nama"><br>
        <input type="checkbox" name="jrs1" value="Si"> Sistem Informasi<br>
        <input type="checkbox" name="jrs1" value="RPL"> RPL<br>
        <input type="submit" name="Input" value="Input">
    </form>
</body>
</html>

<?php 
if (isset($_POST['Input'])){
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jrs1'];
    echo "NPM Anda :$npm<br>";
    echo "Nama Anda :$nama<br>";
    echo "Jurusan : $jurusan<br>";
}
?>