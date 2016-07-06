<?php 
include 'koneksi.php';
$IDPRODUCT=$_GET['IDPRODUCT'];
mysql_query("delete from tsilabtan_product where IDPRODUCT='".$IDPRODUCT."'");
header("location:index.php?page=tabel_product");
?>