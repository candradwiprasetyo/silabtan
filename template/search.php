<?php
session_start();
$page = $_GET['page'];
switch ($page) {
	case 'info_umum':
		# code...	
			$_SESSION['search'] = $_POST['i_search'];
			header("Location: infoUmum.php?search=1");

		break;
	
	case 'info_market':
		# code...	
			$_SESSION['search'] = $_POST['i_search'];
			header("Location: infoMarket.php?search=1");

		break;

	case 'info_jual':
		# code...	
			$_SESSION['search'] = $_POST['i_search'];
			header("Location: infoJual.php?search=1");

		break;

		case 'info_beli':
		# code...	
			$_SESSION['search'] = $_POST['i_search'];
			header("Location: infoBeli.php?search=1");

		break;
}
?>