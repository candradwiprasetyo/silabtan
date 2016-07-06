<?php 
include 'koneksi.php';
$IDTYPEOFPRODUCT=$_POST['IDTYPEOFPRODUCT'];
$NAMEOFPRODUCT=$_POST['NAMEOFPRODUCT'];
$GOODORSERVICE=$_POST['GOODORSERVICE'];

$simpan= "INSERT INTO tsilabtan_product VALUES ('','','$NAMEOFPRODUCT','$GOODORSERVICE','$IDTYPEOFPRODUCT')";
mysql_query($simpan); 
header("location:index.php?page=tabel_product");
?>