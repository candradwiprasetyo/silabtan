<?php 
include 'koneksi.php';
$IDTYPEOFPRODUCT=$_POST['IDTYPEOFPRODUCT'];
$TYPEOFPRODUCT=$_POST['TYPEOFPRODUCT'];

$ubah= "UPDATE tsilabtan_typeofproduct SET TYPEOFPRODUCT='".$TYPEOFPRODUCT."' WHERE IDTYPEOFPRODUCT='".$IDTYPEOFPRODUCT."'";
mysql_query($ubah); 
header("location:index.php?page=tabel_typeproduct");
?>