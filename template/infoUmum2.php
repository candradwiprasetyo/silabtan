<?php
	session_start();
	 if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
		header('location:index.php'); //ke halaman index utama
    }
	include "assets/lib/koneksi.php";
	include "timeout_edit.php";
	$nama= $_SESSION['nama'];
	$email = $_SESSION['username'];
	
	$queryFoto = mysql_query("SELECT p.pictureprofile FROM tsilabtan_user p where p.username = '$email'")   ; 
	$hasilFoto = mysql_fetch_array($queryFoto);
	$numRowsFoto = mysql_num_rows($queryFoto);
	if($numRowsFoto > 0){
		$idAlamatFoto = $hasilFoto['pictureprofile'];
		//echo $idAlamatFoto;
	}
	
	/* print_r($_FILES);
	print_r($_POST); */
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body, html, div, ul,li,a  {margin:0; padding:0;}
	body {font-family:arial;font-size:12px;color:#222;background:url('/images/bg_header2.jpg') repeat;}
	.clear {clear:both;}
	a img {border:none;}
	ul {list-style:none;position:relative; z-index:2;top:1px;display:table;border-left:1px solid #f5ab36;}
	ul li {float:left;}
	ul li a {background:#80FF00;color:#222;display:block;padding:6px 15px;text-decoration:none;border-right:1px solid #f5ab36;border-top:1px solid #f5ab36;border-right:1px solid #f5ab36;}
	ul li a.selected  {border-bottom:1px solid #fff;color:#344385;background:#fff;}
	h1 {display:block;width:1200px;margin:0 auto;padding:20px 0;color:#339933;}
	#navigation {width:auto; margin: 0 auto;}
	#content {width:auto; margin:0 auto;height:auto;background:#fff;border:1px solid #f5ab36; z-index:1; text-align:left; padding:10px 0;}
	#content2 {width:auto; margin:0 auto;height:auto;background:#fff;border:1px solid #f5ab36; z-index:1; text-align:center; padding:10px 0;}
	#logo {width:auto; margin:0 auto; padding:10px 0; text-align:center;}
</style>
<link rel="stylesheet" type="text/css" href="screen.css" media="screen" /> 
<link rel="stylesheet" href="./css/wordcloud.css" type="text/css"/>
<link rel="stylesheet" href="./css/tagcloud.css" type="text/css"/>

<script>
function myComment(idkomen) {
		alert("DfD");
		formData1 = new FormData();
		
		/* var name = document.getElementById("name").value;
		var email = document.getElementById("email").value;
		var password = document.getElementById("password").value;
		var contact = document.getElementById("contact").value;
		alert("DfD2"); */
		
		//var idkomen = document.getElementById(idkomen).value;
		var status = document.getElementById(idkomen).value;
				
		alert(idkomen+" "+status);
		if ((status != '') && (idkomen !='')){
			formData1.append('status',status);
			formData1.append('idkomen',idkomen);
			alert('ndewo');
		}
		
		//formData.append('status',status);
		//formData.append('fileToUpload', file, file.fileName);
		alert("DfD4");
		/* formData.append('name1',name);
		alert("DfD5");
		formData.append('email1', email);
		formData.append('password1',password);
		formData.append('contact1',contact); */
		
		
		// Returns successful data submission message when the entered information is stored in database.
		//var dataString = 'name1=' + name + '&email1=' + email + '&password1=' + password + '&contact1=' + contact ;
		alert("DfD6");
		
		
		// AJAX code to submit form.
		alert("DfD7");
		resetValue();
		$.ajax({
		type: "POST",
		url: "ajaxKomen.php",
		data: formData1,
		contentType: false,
		processData: true,
		cache: false,
		success: function(html) {
			document.getElementById("hasil").innerHTML = html;
		}
		});
		
		
		//return false;
	
	}	
</script>
<script>
	function showJual() {
	  	  
	 /*  if (komentar=="") {
		document.getElementById(idComment).innerHTML="";
		//alert("string kosong");
		return;
	  } */
	  if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		//alert(strID+" sukses");
		  document.getElementById("hasil").innerHTML= xmlhttp.responseText;
		  //setTimeout('showUser(komentar,idComment)',30);
		}
	  }
	  //alert(nama);
	  xmlhttp.open("GET","ajaxUmumTest.php", true);//+"&strID="+strID, true);
	  //&nama="+nama,true);
	  xmlhttp.send();
	  //document.getElementById(1).value = "";
	  //document.getElementById(1).placeholder = "ketik status di sini...";
	}
	
</script>
<script>
function show(nama,tabel){
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		//alert(strID+" sukses");
		  if(tabel=="kota"){
			document.getElementById("listKota").innerHTML= xmlhttp.responseText;
		  }
		  else if(tabel="produk"){
			document.getElementById("listProduk").innerHTML= xmlhttp.responseText;
		  }
		  else if(tabel="satuan"){
			document.getElementById("listSatuan").innerHTML= xmlhttp.responseText;
		  }
		  else{}
		 // setTimeout('showUser(komentar,idComment)',30);
		}
	  }
	 //alert(tabel);
	  //alert("ajaxUmum1.php?komentar='"+komentar+"'&commentup='"+commentup+"'");
	  //if(tabel=="kota")
	  	  if(tabel=="kota"){
			var url = "ambilKota.php?name="+nama+"&tabel="+tabel+"&pseudoParam="+new Date().getTime();
			xmlhttp.open("GET",url, true);
		  }
		  else if (tabel="produk"){
		  	var url = "ambilProduk.php?name="+nama+"&tabel="+tabel+"&pseudoParam="+new Date().getTime();
			xmlhttp.open("GET",url, true);
		  }
		  else if (tabel="satuan"){
			var url = "ambilSatuan.php?name="+nama+"&tabel="+tabel+"&pseudoParam="+new Date().getTime();
			xmlhttp.open("GET",url, true);
		  }
		  else{}
		
	//	xmlhttp.open("GET","ambilKota.php?nocache="+Math.random()+"&name="+nama+"&tabel="+tabel, true);
		
	 // else if(tabel=="produk")	
	 //   xmlhttp.open("GET","ambilProduk.php?name="+nama, true);
	 // else
	 //   xmlhttp.open("GET","ambilSatuanProduk.php?name="+nama, true);
	  //&nama="+nama,true);
	  xmlhttp.send();
	  //document.getElementById('input').style = "display: yes";
	  //document.getElementById(1).placeholder = "ketik status di sini...";
	}


</script>
<script>
		function search(term) {
		  //alert("i am here");
			document.getElementById("cari").value = "";
		  if (term=="") {
			
		  }
		  else {
		  
				var xhr = new XMLHttpRequest();
				xhr.open('GET', "searchUmum.php?komentar="+term+"&jenis=jual", true);
				//alert("telo2");
				xhr.upload.onprogress = function(e) {
					if (e.lengthComputable) {
					var percentComplete = (e.loaded / e.total) * 100;
					console.log(percentComplete + '% uploaded');
					}
				};
				//alert("telo3");
				xhr.onload = function() {
					if (this.status == 200) {
						document.getElementById("hasil").innerHTML = xhr.responseText;
						
						
					};
				};
				xhr.send();
		
			 
			}
		}
	</script>
<script>
	//document.getElementById('submit').addEventListener('click', function(e) {
	function test(){
		var file = document.getElementById('fileToUpload').files[0];
		var fd = new FormData();
		//alert("telo");
		
		
		var status = document.getElementById("status").value;
		
		//resetValue();
		fd.append("afile", file);
		// These extra params aren't necessary but show that you can include other data.
		/* fd.append("username", "Groucho");
		fd.append("accountnum", 123456);
		 */
		if (status != ''){
				fd.append('status',status);
		}
				
		var xhr = new XMLHttpRequest();
		xhr.open('POST', 'ajaxUmumTest.php', true);
		//alert("telo2");
		xhr.upload.onprogress = function(e) {
			if (e.lengthComputable) {
			var percentComplete = (e.loaded / e.total) * 100;
			console.log(percentComplete + '% uploaded');
			}
		};
		//alert("telo3");
		xhr.onload = function() {
			if (this.status == 200) {
				document.getElementById("hasil").innerHTML = xhr.responseText;
				
				document.getElementById("status").value = '';
				document.getElementById('fileToUpload').files[0] = '';
				
				/* var resp = JSON.parse(this.response);
				console.log('Server got:', resp);
				var image = document.createElement('img');
				image.src = resp.dataUrl;
				document.body.appendChild(image); */
			};
		};
		xhr.send(fd);
	};
</script> 
<script>
	//document.getElementById('submit').addEventListener('click', function(e) {
	function test2(idKomen){
		//var file = document.getElementById('fileToUpload').files[0];
		var fd2 = new FormData();
		//alert("telo");
		
		//var idkomen = document.getElementById("idcomment").value;
		var status = document.getElementById(idKomen).value;
		alert(status);
		
		//resetValue();
		//fd.append("afile", file);
		// These extra params aren't necessary but show that you can include other data.
		/* fd.append("username", "Groucho");
		fd.append("accountnum", 123456);
		 */
		if (status != ''){
			fd2.append('komen',status);
			fd2.append('idKomen',idKomen);	
			
			var xhr = new XMLHttpRequest();
			xhr.open('POST', 'ajaxUmumTest.php', true);
			//alert("telo2");
			xhr.upload.onprogress = function(e) {
				if (e.lengthComputable) {
				var percentComplete = (e.loaded / e.total) * 100;
				console.log(percentComplete + '% uploaded');
				}
			};
			//alert("telo3");
			xhr.onload = function() {
				if (this.status == 200) {
					document.getElementById("hasil").innerHTML = xhr.responseText;
					//document.getElementById("listSatuan").innerHTML = '';
					
					document.getElementById("status").value = '';
					document.getElementById('fileToUpload').files[0] = '';
					/* var resp = JSON.parse(this.response);
					console.log('Server got:', resp);
					var image = document.createElement('img');
					image.src = resp.dataUrl;
					document.body.appendChild(image); */
				};
			};
			xhr.send(fd2);
		};
	};
</script> 
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>-->
<script>
var jq =$.noConflict();
var auto_refresh = setInterval(
function()
{
jq('#hasil').fadeOut('slow').load('ajaxUmumTest.php').fadeIn("slow");
}, 60000);
jq(document).ready(function(){
jq('#hasil').load('ajaxUmumTest.php')
})
</script>
<script src="./Sphere/src/jquery-min.js"></script>
<script type="text/javascript" src="./Sphere/src/tagcloud.jquery.js"></script>
</head>
<body style="font-family: calibri ; font-size: 80 %;" onload="showJual();">
<h1>SISFOLABTAN (Sistem Informasi Kolaboratif Berbasis Komunitas Untuk Pertanian)</h1>
<hr/>
<div id="navigation">
	
	<ul>
		<li><a href="infoumum.php" id="tab1" class="selected">Info Umum</a></li>
		<li><a href="infoMarket.php" id="tab2" >Info Market</a></li>
		<li><a href="infojual.php" id="tab3" >Info Jual</a></li>
		<li><a href="infobeli.php" id="tab4">Info Butuh</a></li>
		<li><a href="pesan.php" id="tab5">Pesan</a></li>  
		<li><a href="analysis.php" id="tab6">More...</a></li>  
	</ul>
	<div class="clear"></div>
	<div id="layoutdims" style="width: auto;">
	
	
	<input border="0" size="30" id="cari" type="text" placeholder="ketik apa yang anda cari...">
	<input type="button" value="search" onclick="search(document.getElementById('cari').value);"> 
	<strong>Welcome, <?php echo $email;?> | <a href="logout.php">Logout</a></strong>
	</div>
</div>

<div class="colmask leftmenu">
	<div class="colleft">
		<div class="col1">
			<!-- Column 1 start -->
			
			<div id="content">
			<strong><h3 align="center">Kirim Info Umum</h3></strong>

			<form id="form" name="form">
				
				
					<table align="center" >
					<tr><td>
					<input type="file" name="fileToUpload" id="fileToUpload" value="Pilih File"  accept="image/*"/>
					</td></tr>
					<tr><td>
					<textarea rows="2" cols="50" id="status" name = "status" type="text" placeholder="ketik informasi di sini..." onkeydown="this.placeholder = ''"></textarea>&nbsp;
					</td></tr>
					<tr><td>
					<input id="submit" type="button"  value="Submit" onclick="test();"> <!--onclick="myFunction();"-->
					</td></tr>
					</table>
				
			</form>
			
			<div id="hasilSearch" align="center"></div>
			
			<div id="hasil" align="center"></div>
			</div>
			
		
			<!-- Column 1 end -->
		</div>
		<div class="col2">
			<div id="content2">
			
			<h2> Kata-kata yang sering digunakan dalam INFO UMUM: </h2>
			<p>
			<?php
				include './classes/wordcloud.class.php';
				include './Sphere/index2.php';
				//include './Sphere/index.php';
				
				$cloud = new wordCloud();
				$qStatus = "SELECT group_concat(status SEPARATOR ' ') status from tsilabtan_status where generalsellorneedorinfo is null";
				$rStatus = mysql_query($qStatus);
				$hStatus = mysql_fetch_row($rStatus);
				$cloud->addString($hStatus['0']); // Basic Method of Adding Keyword
				$cloud->setLimit(5);
				//echo $cloud->showCloud();
				$parsingBaris=explode("<BR />",$cloud->showCloud());
				$jumlah=sizeof($parsingBaris);
				for($i=0;$i<$jumlah;++$i){
					//echo "{$parsingBaris[$i]}_{$i} <BR />";
				}
				$awan=new awan();
				$awan->nilaiVariabel($parsingBaris, $i);
				//$awan->tampil();
			?>
			</p>
			<p>
			<canvas id="cloudcanvas" width="600" height="400"></canvas>
			</p>
			</div>
			<!-- Column 2 end -->
		</div>
	</div>
</div>

<div id="logo">
<hr/>
Hasil Penelitian Kreatifa LPPM - UPN Veteran Jawa Timur(c)2014. Mohamad Irwan Afandi
	<a> </a>
</div>



</body>
</html>