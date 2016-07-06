<?php
session_start();
$search  = $_GET['search'];
$_SESSION['search'] = $search;
//echo $_SESSION['search'];
echo "<meta http-equiv=\"refresh\" content=\"0;URL=?page=infoUmum&search=$search\">";

?>