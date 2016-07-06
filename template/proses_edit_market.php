<?php 
include 'koneksi.php';
$IDMARKET=$_POST['IDMARKET'];
$IDCITY=$_POST['IDCITY'];
$NAMEOFMARKET=$_POST['NAMEOFMARKET'];

$ubah= "UPDATE tsilabtan_market SET IDMARKET='".$IDMARKET."',IDCITY='".$IDCITY."',NAMEOFMARKET='".$NAMEOFMARKET."' WHERE IDMARKET='".$IDMARKET."'";
mysql_query($ubah); 
header("location:index.php?page=tabel_market");
?>