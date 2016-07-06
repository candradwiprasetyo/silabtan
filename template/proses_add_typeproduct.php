<?php 
include 'koneksi.php';
$TYPEOFPRODUCT=$_POST['TYPEOFPRODUCT'];

$simpan= "INSERT INTO tsilabtan_typeofproduct VALUES ('','$TYPEOFPRODUCT')";
mysql_query($simpan); 
header("location:index.php?page=tabel_typeproduct");
?>