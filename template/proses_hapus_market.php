<?php 
include 'koneksi.php';
$IDMARKET=$_GET['IDMARKET'];
mysql_query("delete from tsilabtan_market where IDMARKET='".$IDMARKET."'");
header("location:index.php?page=tabel_market");
?>