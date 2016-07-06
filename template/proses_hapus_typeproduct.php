<?php 
include 'koneksi.php';
$IDTYPEOFPRODUCT=$_GET['IDTYPEOFPRODUCT'];
mysql_query("delete from tsilabtan_typeofproduct where IDTYPEOFPRODUCT='".$IDTYPEOFPRODUCT."'");
header("location:index.php?page=tabel_typeproduct");
?>