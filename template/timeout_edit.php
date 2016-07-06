<?php
if(!isset($_SESSION)){
session_start();
}else{}
function timer(){
	$time=1000;
	$_SESSION[timeout]=time()+$time;
}
function cek_login_edit(){
	$timeout=$_SESSION[timeout];
	if(time()<$timeout){
		timer();
		return true;
	}else{
		unset($_SESSION[timeout]);
		return false;
	}
}
?>
