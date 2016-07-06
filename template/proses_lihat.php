<?php
set_time_limit(0);

include "koneksi.php";
$date = $_POST['tanggal'];
//$area = $_POST['area'];
//$pasar = $_POST['pasar'];

	if($_POST['jenis']=="produsen"){
	header('location:'.$base_url.'infoMarket_pemerintah&tanggal='.$_POST['tanggal'].'&jenis='.$_POST['jenis']);
	}else{
	header('location:'.$base_url.'infoMarket_pemerintah&tanggal='.$_POST['tanggal'].'&jenis='.$_POST['jenis'].'&area='.$_POST['area'].'&pasar='.$_POST['pasar']);	
	}

 ?>