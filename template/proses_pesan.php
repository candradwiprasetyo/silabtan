<?php
session_start();
include 'koneksi.php';

$act = $_GET['act'];

switch ($act) {
	case 'comment':
		mysql_query("insert into tsilabtan_message values 
			('','".$_SESSION['username']."', '".$_GET['tsi_username']."', '".$_POST['i_comment']."', '', '".date("Y-m-d H:i:s")."')");	
		header("Location: index.php?page=pesan&chat=$_GET[tsi_username]");
	break;
	
	case 'new_comment':
		mysql_query("insert into tsilabtan_message values 
			('','".$_SESSION['username']."', '".$_POST['i_new_user']."', '".$_POST['i_new_comment']."', '', '".date("Y-m-d H:i:s")."')");	
		header("Location: index.php?page=pesan&chat=$_POST[i_new_user]");
	break;
}

?>