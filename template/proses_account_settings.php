<?php 
session_start();
include 'koneksi.php';
$fullname=$_POST['i_fullname'];
$about=$_POST['i_about'];
$address=$_POST['i_address'];
$phone_number=$_POST['i_phone_number'];
$home_phone_number=$_POST['i_home_phone_number'];
$office_phone_number=$_POST['i_office_phone_number'];
$img = ($_FILES['i_img']['name']) ? time().$_FILES['i_img']['name'] : null;
$i_img_tmp = $_FILES['i_img']['tmp_name'];
$path = "./images/";

if($img){
	move_uploaded_file($i_img_tmp, "images/".$img);
	$ubah = mysql_query("UPDATE tsilabtan_user SET PICTUREPROFILE = '$path$img' WHERE USERNAME='".$_SESSION['username']."'");

	
}

$ubah= "UPDATE tsilabtan_user SET FULLNAME='".$fullname."',ABOUT='".$about."',ADDRESS='".$address."',CELLPHONENUMBER='$phone_number', HOMEPHONENUMBER='$home_phone_number', OFFICEPHONENUMBER='$office_phone_number' WHERE USERNAME='".$_SESSION['username']."'";
mysql_query($ubah); 
header("location:index.php?page=account_settings");
?>