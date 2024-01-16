<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <form action="" method="get" name="input">
        Input NPM : <input type="text" name="npm"><br>
        Input Nama : <input type="text" name="nama"><br>
        <input type="submit" name="Input" value="Input">
    </form>
</body>
</html>

<?php 
if (isset($_GET['Input'])){
    $npm = $_GET['npm'];
    $nama = $_GET['nama'];
    
}
?>