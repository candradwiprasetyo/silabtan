<?php
	$h	= "localhost";
	$u	= "root";
	$p	= "";
	$d 	= "dbsilabtan";
	
	mysql_connect($h, $u, $p) or die (mysql_error());
	mysql_select_db($d)  or die("Database tidak bisa dibuka");
	$base_url = "http://localhost:81/silabtan/template/?page=";
	$base_url_home_admin = "http://localhost/silabtan/template/";
?>
