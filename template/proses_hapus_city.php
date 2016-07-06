<?php 
include 'koneksi.php';
$IDCITY=$_GET['IDCITY'];
mysql_query("delete from tsilabtan_city where IDCITY='".$IDCITY."'");
header("location:index.php?page=tabel_city");
?>