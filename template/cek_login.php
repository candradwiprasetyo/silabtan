<?php
include ('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];
$pass = md5($password);

//menentukan user login ketika jabatan admin

$login = mysql_query("SELECT * FROM tsilabtan_user WHERE 
                          USERNAME      ='$username' AND 
                          PASSWORD      ='$pass'
                          ");
$ada = mysql_num_rows($login);
$r = mysql_fetch_array($login);

session_start();
include "timeout_edit.php";

//menentukan user login ketika jabatan admin
if ($ada > 0)
{

	timer();
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];
	$_SESSION['level'] = $r['LEVEL'];
	$nama = explode(" ", $r['FULLNAME']);
	$_SESSION['nama'] = $nama[0];
	$_SESSION['kota'] = $r['address'];

	header('location:' . $base_url . 'infoUmum');
}
else
{
	echo "
        <script language=\"javascript\">
          alert(\"AKSES di tolak !!!! Maaf, Silahkan Periksa Username dan Password Anda, atau username anda TIDAK AKTIF\");
          window.location=(\"signin.php\")
        </script>";

	// echo $username;
	// echo $password;

}
?>
