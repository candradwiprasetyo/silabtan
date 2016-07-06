<?php
	session_start();
	unset ($_SESSION['username']);
	unset ($_SESSION['password']);
	unset ($_SESSION['level']);
	//unset ($_SESSION['jabatan']);
	session_destroy();
	
	echo"
		<script language=\"javascript\">
		alert(\"Logout Berhasil, Kembali Ke Menu Utama\");
		window.location=(\"index.php\")
		</script>";
		

	
	
	
	
	
?>