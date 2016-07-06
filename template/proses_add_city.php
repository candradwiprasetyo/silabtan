<?php 
include 'koneksi.php';
$IDCITY=$_POST['IDCITY'];
$IDPROVINCE=$_POST['IDPROVINCE'];
$CODECITY=$_POST['CODECITY'];
$NAMEOFCITY=$_POST['NAMEOFCITY'];

$simpan= "INSERT INTO tsilabtan_city VALUES ('','$IDPROVINCE','$CODECITY','$NAMEOFCITY')";
mysql_query($simpan); 
header("location:index.php?page=tabel_city");
?>