<html>
<head>
<title> Ganjil Genap </title>
</head>
<body>
<form method="POST" action="tugasno2.php">
<p>
    Masukkan Nilai : <input type = 'text' name ="nilai" size='3'>
</p>
<p>
    <input type = "submit" value = "Ganjil atau Genap" name = "submit"> 
</p>
</form>

<?php
error_reporting (E_ALL ^ E_NOTICE);
$nilai = $_POST["nilai"];
$submit = $_POST["submit"];

if($submit){
    if($nilai%2==0){
        echo"Nilai $nilai adalah Genap</br>";
    }else{
        echo"Nilai $nilai adalah Ganjil";
    }
}
?>

</body>