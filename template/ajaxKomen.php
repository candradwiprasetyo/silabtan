<?php
// Fetching Values From URL
/* $idcity = $_POST['namaKota2'];
echo "kota".$idcity;
$idproduct = $_POST['namaProduk2'];
echo "produk".$idproduct;
$idmeasureunit = $_POST['namaSatuan2'];
echo "satuan".$idmeasureunit;
$jualbeli = $_POST['jualbeli2'];
echo "jualbeli".$jualbeli;
$stock = $_POST['stock2'];
echo "stock".$stock;
$price = $_POST['harga2'];
echo "harga".$price;
$komentar = $_POST['status2'];
echo "komen".$komentar;	
$commentup= $_POST['idcomment2'];
echo "idkomen".$commentup;	
	 */
	session_start();
	 if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
		header('location:index.php'); //ke halaman index utama
    }
	include "timeout_edit.php";
	include ('assets/lib/koneksi.php');
	
	$nama= $_SESSION['nama'];
	$email = $_SESSION['username'];
	
	
	//cari foto yg login
	$queryFoto = mysql_query("SELECT p.pictureprofile FROM tsilabtan_user p where p.username = '$email'")   ; 
	$hasilFoto = mysql_fetch_array($queryFoto);
	$numRowsFoto = mysql_num_rows($queryFoto);
	if($numRowsFoto > 0){
		$idAlamatFoto = $hasilFoto['pictureprofile'];
		
	}
	
	
	//$komentar = $_POST['status'];
	//$commentup = $_POST['idkomen'];
	echo $komentar;
	
	//inserting to table status
	//...........................
	
	$time=date("y/m/d H:i:s", strtotime("now"));
	//echo $time;
	//if($komentar != ''){ // and $commentup != ''){
		$query = mysql_query("INSERT INTO tsilabtan_status(username, status, tsi_idstatus, datecreated) VALUES('".$email."','".$komentar."','".$commentup."','".$time."')");
		//echo "INSERT INTO commentpengguna VALUES('','".$email."','".$komentar."','".$commentup."','".$time."')";
	//}
	
	
	//tampilkan semua status termasuk yang baru
	//...........................
	
	$queryKomen2=mysql_query("SELECT cp.idstatus, cp.username, cp.status, cp.attachment,cp.datecreated, p.fullname,p.pictureprofile, pr.nameofproduct, s.*, c.nameofcity FROM tsilabtan_status cp JOIN tsilabtan_user p ON (cp.username = p.username) JOIN tsilabtan_product pr ON (cp.idproduct = pr.idproduct) JOIN tsilabtan_sell s ON (cp.idstatus = s.idstatus) JOIN tsilabtan_city c ON (c.`IDCITY` = s.`KOTA`) WHERE cp.tsi_idstatus='0' AND cp.generalsellorneedorinfo='jual' ORDER BY cp.idstatus DESC");
	$numRows = mysql_num_rows($queryKomen2);
		
	
	while ($hasilKomen  = mysql_fetch_array($queryKomen2)){
	
		
		$idComment = $hasilKomen['idstatus'];
	
		echo "<p id='div$idComment'>";
		echo "<form id='form' name='form' >";
		echo "<table bgcolor='#CCFF66'><tr><td><img src='".$hasilKomen['pictureprofile']."' alt='profile foto'/>";
		echo "</td><td><strong><a href='registrasi.php'>".$hasilKomen['fullname']."</a></strong></td></tr>";
		echo "<tr><td colspan='2'>".$hasilKomen['nameofcity']."<img src='./".$hasilKomen['attachment']."' alt='foto'/>";
		echo $hasilKomen['nameofproduct'].",".$hasilKomen['price']."/".$hasilKomen['idsatuan'].",".$hasilKomen['komentar']."<td></tr><br>";
		
		
		$queryKomenTurunan = mysql_query("SELECT cp.idstatus, cp.username, cp.status, p.fullname,p.pictureprofile FROM tsilabtan_status cp JOIN tsilabtan_user p ON (cp.username = p.username) where cp.tsi_idstatus='".$idComment."' order by cp.idstatus ASC");
		
		while ($hasilKomenTurunan  = mysql_fetch_array($queryKomenTurunan)){
			echo "<tr bgcolor='#D0FA58' style='border:1px solid #ddd;' cellspacing='0' cellpadding='2'><td><img src='".$hasilKomenTurunan['pictureprofile']."' alt='profile foto'/></td><td><strong><a href='registrasi.php'>".$hasilKomenTurunan['fullname']."</a></strong> ".$hasilKomenTurunan['status']."</td></tr>";
			
		}
		
		echo "<tr bgcolor='#80FF00'><td><img src='".$idAlamatFoto."' alt='profile foto'/></td><td><textarea rows='1' cols='50' id='status'  type='text' name='komentar'  placeholder='ketik komentar anda di sini...' onkeydown='this.placeholder = ''' ></textarea><input type=text style='display: none;' id='idcomment' name='idcomment' value='$idComment'><input type='button' value='>>' onclick='myComment();' ></td></tr></table></form></p>" ; 
		
		
	}
	
/* $connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("mydba", $connection); // Selecting Database
if (isset($_POST['name1'])) {
$query = mysql_query("insert into form_element(name, email, password, contact) values ('$name2', '$email2', '$password2','$contact2')"); //Insert Query
echo "Form Submitted succesfully";
}
mysql_close($connection); // Connection Closed */

?>