<?php
include('koneksi.php');

$name = $_POST['nama_depan']." ".$_POST['nama_belakang'];
$password = $_POST['password'];
$kota = $_POST['kota'];
$email = $_POST['email'];
$pass = md5($password);

/*
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $pass;
echo "<br>";
echo $kota;
*/
	$sql_tambah	= mysql_query("INSERT INTO tsilabtan_user (username,password,fullname,address) VALUES ('$email','$pass','$name','$kota')");

	if($sql_tambah){
//		echo "<br>REGISTRASI SUKSES. Silakan klik di <a href='index.php'>SINI</a> untuk LOGIN";

//		$result = mysql_query("select * from tutorials");  
//		echo "<h2>Here is a list of the topics:</h2>";  
//		while ($row = mysql_fetch_array($result)) {  
//		echo $row['name']."<br />";  
		
		//$sql_view = mysql_query("SELECT * from pengguna where email = '$email'");
		//$hasil=mysql_fetch_array($sql_view);
		
		//echo "<br><br><h2><table><tr><td>$sql_view['email']</td><td>$sql_view['password']</td>";
		//echo "<td>$sql_view['name']</td><td>$sql_view['kota']</td></tr></table>";
//		echo "<table><tr><td>";
//		echo $hasil['email']."</td><td>".$hasil['name']."</td></tr><table>";
		 
	}
//	else
//		echo "<br>insert gagal";
			
	header("location: signin.php");
?>
