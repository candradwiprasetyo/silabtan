<?php
	//session_start();
	if (!isset($_SESSION['username']) and !isset($_SESSION['password']))
	{
		header('location:signin.php');
		//ke halaman index utama
	}
?>
