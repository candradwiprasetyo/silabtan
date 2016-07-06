<?php 
include 'koneksi.php';
$IDCITY=$_POST['IDCITY'];
$IDPROVINCE=$_POST['IDPROVINCE'];
$CODECITY=$_POST['CODECITY'];
$NAMEOFCITY=$_POST['NAMEOFCITY'];

$ubah= "UPDATE tsilabtan_city SET IDPROVINCE='".$IDPROVINCE."',CODECITY='".$CODECITY."',NAMEOFCITY='".$NAMEOFCITY."' WHERE IDCITY='".$IDCITY."'";
mysql_query($ubah); 
header("location:index.php?page=tabel_city");
?>