<?php 
include 'koneksi.php';
$IDMARKET=$_POST['IDMARKET'];
$IDCITY=$_POST['IDCITY'];
$NAMEOFMARKET=$_POST['NAMEOFMARKET'];

$simpan= "INSERT INTO tsilabtan_market VALUES ('$IDMARKET','$NAMEOFMARKET','$IDCITY',null)";
mysql_query($simpan); 
header("location:index.php?page=tabel_market");
?>