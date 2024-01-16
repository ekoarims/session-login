<html>
    <head><title>Contoh IF Majemuk</title></head>
    <body>
    
    <FORM ACTION="" METHOD="POST" NAME="input">
        Input NPM : <input type ="text" name="npm"><br>
        Input Nama : <input type ="text" name="nama"><br>
        Input Nilai : <input type ="text" name="nilai"><br>
        <input type="submit" name="input" value="input">
    </FORM>
</body>
</html>

<?php
if (isset($_POST['input'])) {
$nilai = $_POST['nilai'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
    echo "NPM Anda : <b>$npm</b><br>";
    echo "Nama Anda : <b>$nama</b><br>";
if (($nilai >= 0)&&($nilai < 50))
{ $grade ="E";}
elseif(($nilai >= 50)&&($nilai < 60))
{ $grade ="D";}
elseif(($nilai >= 60)&&($nilai < 75))
{ $grade ="C";}
elseif(($nilai >= 75)&&($nilai < 85))
{ $grade ="B";}
elseif(($nilai >= 85)&&($nilai < 100))
{ $grade ="A";}
else
{$grade = "Nilai tidak valid"; }
echo "Nilai Anda : $nilai, dikonversi menjadi
$grade";
}