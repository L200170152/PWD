<html>
<head>
<title> Program Penjumlahan </title>
</head>
<body>
<form method="POST" action="tugas.php">
<p>
    Nilai A adalah : <input type = 'text' name ="nilai" size='3'>
</p>
<p>
    Nilai B adalah : <input type = 'text' name ="nilaiB" size='3'>
</p>
<p>
    <input type = "submit" value = "Jumlahkan" name = "submit"> 
</p>
</form>

<?php
error_reporting (E_ALL ^ E_NOTICE);
$nilai = $_POST["nilai"];
$nilaiB = $_POST["nilaiB"];
$submit = $_POST["submit"];

if($submit){
    $huruf=$nilai+$nilaiB;
    echo"Nilai A adalah $nilai</br>";
    echo"Nilai B adalah $nilaiB</br>";
    echo"Jadi Nilai A ditambahkan Nilai B adalah $huruf";
}else{
    $huruf='"Nilai yang dimasukkan salah!"';
}
?>

</body>
</html>