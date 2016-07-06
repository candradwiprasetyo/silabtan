<?php
	session_start();
	 if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
		header('location:signin.php'); //ke halaman index utama
    }
	include "koneksi.php";
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

include('header.php');
?>

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
	  xmlhttp.open("GET","ajaxMarketTest.php", true);//+"&strID="+strID, true);
	  //&nama="+nama,true);
	  xmlhttp.send();
	  //document.getElementById(1).value = "";
	  //document.getElementById(1).placeholder = "ketik status di sini...";
	}
	
</script>
<script>
function show(nama,tabel){
	//alert("masuk");
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		//alert(strID+" sukses");
		  if(tabel=="pasar"){
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
	  	  if(tabel=="pasar"){
			var url = "ambilPasar.php?name="+nama+"&tabel="+tabel+"&pseudoParam="+new Date().getTime();
			//alert("masuk2");
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
				xhr.open('GET', "searchPasar.php?komentar="+term+"&jenis=marke", true);
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
	//document.getElementById('submit').addEventListener('click', function(e) {
	function test(){
		var file = document.getElementById('fileToUpload').files[0];
		var fd = new FormData();
		alert("telo");
		
		var satuan = document.getElementById("listSatuan").value;
		//var kuantitas = document.getElementById("kuantitasProduk").value;
		var idkomen = document.getElementById("idcomment").value;
		var jualbeli= document.getElementById("jualbeli").value;
		var status = document.getElementById("kolom_status").value;
		var kota = document.getElementById("listKota").value;
		var produk = document.getElementById("listProduk").value;
		var harga = document.getElementById("inputHargaProduk").value;
		//var satuan2 = document.getElementById("listSatuan2").value;
		//resetValue();
		fd.append("afile", file);
		// These extra params aren't necessary but show that you can include other data.
		/* fd.append("username", "Groucho");
		fd.append("accountnum", 123456);
		 */
		if (status != ''){
				fd.append('status',status);
		}
		if (satuan != ''){
			fd.append('satuan',satuan);
		}
		if (idkomen != ''){
			fd.append('idkomen',idkomen);
		}
		if (kota != ''){
			fd.append('kota',kota);
		}
		if (produk != ''){
			fd.append('produk',produk);
		}
		if (harga != ''){
			fd.append('harga',harga);
		}
		if (jualbeli != ''){
			fd.append('jualbeli',jualbeli);
		}
		
		var xhr = new XMLHttpRequest();
		xhr.open('POST', 'ajaxMarketTest.php', true);
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
				document.getElementById("listSatuan").value = "";
				//document.getElementById("listSatuan2").value = "";
				//document.getElementById("kuantitasProduk").value = '';
				//document.getElementById("idcomment").innerHTML = '';
				document.getElementById("jualbeli").innerHTML = '';
				document.getElementById("kolom_status").value = '';
				document.getElementById("inputKota").value = '';
				document.getElementById("inputProduk").value = '';
				document.getElementById("listKota").innerHTML = '';
				document.getElementById("listProduk").innerHTML = '';
				document.getElementById("inputHargaProduk").value = "";
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
			xhr.open('POST', 'ajaxMarketTest.php', true);
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
					document.getElementById("kuantitasProduk").value = '';
					//document.getElementById("idcomment").innerHTML = '';
					document.getElementById("jualbeli").innerHTML = '';
					document.getElementById("status").value = '';
					document.getElementById("inputKota").value = '';
					document.getElementById("inputProduk").value = '';
					document.getElementById("listKota").innerHTML = '';
					document.getElementById("listProduk").innerHTML = '';
					document.getElementById("inputHargaProduk").value = "";
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

<script>
//var jq =$.noConflict();
var auto_refresh = setInterval(
function()
{
$('#hasil').fadeOut('slow').load('ajaxMarketTest.php').fadeIn("slow");
}, 60000);
$(document).ready(function(){
$('#hasil').load('ajaxMarketTest.php')
})
</script>
<body onload="showJual();">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
  <div class="leftpanel">
    
    <div class="logopanel">
        <h1><span>[</span> SILABTAN <span>]</span></h1>
    </div><!-- logopanel -->
    
    <div class="leftpanelinner">
        
        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">   
            <div class="media userlogged">
                <img alt="" src="images/photos/loggeduser.png" class="media-object">
                <div class="media-body">
                    <h4>John Doe</h4>
                    <span>"Life is so..."</span>
                </div>
            </div>
          
            <h5 class="sidebartitle actitle">Account</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="profile.html"><i class="fa fa-user"></i> <span>Profile</span></a></li>
              <li><a href=""><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
              <li><a href=""><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
              <li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>
      
      <h5 class="sidebartitle">Navigation</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
	  <!--<li><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>-->
        <li><a href="infoUmum.php"><i class="fa fa-desktop"></i> <span>Info Umum</span></a></li>
        <li><a href="infoMarket.php"><i class="fa fa-shopping-cart"></i> <span>Info Market</span></a></li>
        <li><a href="infoJual.php"><i class="fa fa-tags"></i> <span>Info Jual</span></a></li>
        <li><a href="infoCreditCard.php"><i class="fa fa-shopping-cart"></i> <span>Info Butuh</span></a></li>
        <li><a href=""><i class="fa fa-bars"></i> <span>More...</span></a></li>   
      </ul>
      
      
      
    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->
  <style>
  .mainpanel2 {
    margin-left: 240px;
    background: #FFF;
    height: 100%;
}
  </style>
  <div class="mainpanel">
    
    <div class="headerbar">
      
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
      <?php
      	$search = (isset($_GET['search'])) ? $_GET['search'] : "";
      	if($search==1){
      		$_SESSION['search'] = $_SESSION['search'];
      	}else{
      		unset($_SESSION['search']);
      	}
      ?>
      <form class="searchform" action="search.php?page=info_market" method="post">
        <input type="text" class="form-control" name="i_search" placeholder="Search here..." value="<?php if(isset($_SESSION['search'])){ echo $_SESSION['search']; }?>" />
      </form>
      
      <div class="header-right">
        <ul class="headermenu">
          
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="images/photos/loggeduser.png" alt="" />
                <?php echo $_SESSION['nama'];?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
              </ul>
            </div>
          </li>
          <li>
            <button id="chatview" class="btn btn-default tp-icon chat-icon">
                <i class="glyphicon glyphicon-comment"></i>
            </button>
          </li>
        </ul>
      </div><!-- header-right -->
      
    </div><!-- headerbar -->
        
    <div class="pageheader">
      <h2><i class="fa fa-clock-o"></i> Info Market <span>Subtitle goes here...</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="index.html">Bracket</a></li>
          <li><a href="index.html">Pages</a></li>
          <li class="active">Timeline</li>
        </ol>
      </div>
    </div>
    
    <div class="contentpanel">
      
      <div class="row" style="max-width: 100%;max-height: 100%;padding:0px 0px">
        
        
		<div class="col-sm-6" style="position: relative;">
            
        </div><!-- col-sm-6 -->
		<div class="col-sm-6" style="position: relative;">
            <div class="panel panel-dark panel-alt ">
			<form id="form" name="form">
				<div class="panel-header">
				<center><h2>Kirim Info Market</h2></center>
				</div>
				<div class="panel-body">
					
					<div class="form-group">
                    <!--
					<div class="col-sm-5">
					<input type="text" id="inputKota" name="kota" value="" class="form-control" title="Your name is !" placeholder="Ketik nama pasar/lokasi di sini..."  onkeyup="show(this.value,'pasar');"/>
					</div>
					-->
					
					<select id="listKota" name="namaKota" class="form-control chosen-select" data-placeholder="Pilih nama pasar/lokasi">
					<option value=""></option>
					<?php 
					$query = mysql_query("SELECT m.idmarket, concat(m.nameofmarket,', ',c.nameofcity,',',d.nameofdistrict) AS kota
							  FROM tsilabtan_market m 
							  JOIN tsilabtan_district d ON (m.iddistrict = d.iddistrict)
							  JOIN tsilabtan_city c ON (c.idcity = d.idcity)
							  WHERE m.NAMEOFMARKET LIKE '%$name%'
							");
							echo "SELECT m.idmarket, concat(m.nameofmarket,', ',c.nameofcity,',',d.nameofdistrict) AS kota
							  FROM tsilabtan_market m 
							  JOIN tsilabtan_district d ON (m.iddistrict = d.iddistrict)
							  JOIN tsilabtan_city c ON (c.idcity = d.idcity)
							  WHERE m.NAMEOFMARKET LIKE '%$name%'
							";
		$numrows = mysql_num_rows($query);
		while($row = mysql_fetch_array($query)){
			echo "<option value='".$row['idmarket']."'>".$row['kota']."</option>";
		}
		?>
										</select>
					
					</div>
					<div class="form-group">
					<!--<div class="col-sm-5">
                    <input id="inputProduk" type="text" name="aktivitas" value="" class="form-control" title="Your name is !" placeholder="Ketik nama produk di sini..."  onkeyup="show(this.value,'produk');"/>
					</div>
					-->
					
					<select id="listProduk" name="namaProduk" class="form-control chosen-select" data-placeholder="Pilih nama produk">
					<option value=""></option>
					<?php
					$query = mysql_query("SELECT idproduct,concat(typeofproduct,',',nameofproduct) as produk
							  FROM tsilabtan_product
							  WHERE nameofproduct LIKE '%$name%' OR typeofproduct LIKE '%$name%'
							");
		$numrows = mysql_num_rows($query);
		while($row = mysql_fetch_array($query)){
			echo "<option value='".$row['idproduct']."'>".$row['produk']."</option>";
		}  
?>		
					</select>
					
					</div>
                    <div class="form-group">
					<div class="col-sm-5">
                    <input type="text" id="inputHargaProduk" name="harga" value="" class="form-control" title="Your name is !" placeholder="Ketik harga produk di sini..."  />
					</div>
					
					<div class="col-sm-7">
					<select id="listSatuan" name="namaSatuan" class="form-control" title="Your name is required!" >
											<option name="">Pilih Salah Satu</option>
											<?php
						include "koneksi.php";
						
							$query = mysql_query("SELECT idmeasureunit,nameofmeaunit as unit
												  FROM tsilabtan_measureunit
												");
							$numrows = mysql_num_rows($query);
							while($row = mysql_fetch_array($query)){
								echo "<option value='".$row['idmeasureunit']."'>".$row['unit']."</option>";
							}  
						?>
										</select>
					</div>
					</div>
					<div class="form-group">
					<textarea id="kolom_status" name="status" class="form-control" type="text" placeholder="ketik keterangan tambahan di sini..." onkeydown="this.placeholder = ''"></textarea>
					</div>
				</div><!-- panel-body -->
                <div class="panel-footer">
                    <div class="timeline-btns pull-left">
						<input type="file" name="fileToUpload" id="fileToUpload" value="Pilih File" accept="image/*" style="display:none"/>
					    <input type="text" style="display: none;" id="jualbeli" name="jualbeli" value="market">
						<input type="text" style="display: none;" id="idcomment" name="idcomment" value="">
						<a href="javascript:void(0)" id="upload_link" class="tooltips" onclick="upload_gambar();" data-toggle="tooltip" title="Add Photo"><i class="glyphicon glyphicon-picture"></i></a>
                        <a href="" class="tooltips" data-toggle="tooltip" title="Add Video"><i class="glyphicon glyphicon-facetime-video"></i></a>
                        <a href="" class="tooltips" data-toggle="tooltip" title="Check In"><i class="glyphicon glyphicon-map-marker"></i></a>
                        <a href="" class="tooltips" data-toggle="tooltip" title="Tag User"><i class="glyphicon glyphicon-user"></i></a>
                    </div><!--timeline-btns -->
					<input id="submit" class="btn btn-primary pull-right" type="button"  value="Submit Post" onclick="test();">
                </div><!-- panel-footer -->
            </form>
			</div>
			<div id="hasil"></div>
        </div><!-- col-sm-6 -->
	  </div>
	</div>
    
  </div><!-- mainpanel -->
  
  <script>
  function upload_gambar(){
  $("#fileToUpload").trigger('click');
  }
  
  </script>
  
  <div class="rightpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a href="#rp-alluser" data-toggle="tab"><i class="fa fa-users"></i></a></li>
        <li><a href="#rp-favorites" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
        <li><a href="#rp-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
        <li><a href="#rp-settings" data-toggle="tab"><i class="fa fa-gear"></i></a></li>
    </ul>
        
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="rp-alluser">
            <h5 class="sidebartitle">Online Users</h5>
            <ul class="chatuserlist">
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/userprofile.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Eileen Sideways</strong>
                            <small>Los Angeles, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user1.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <span class="pull-right badge badge-danger">2</span>
                            <strong>Zaham Sindilmaca</strong>
                            <small>San Francisco, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user2.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Nusja Nawancali</strong>
                            <small>Bangkok, Thailand</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user3.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Renov Leongal</strong>
                            <small>Cebu City, Philippines</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Weno Carasbong</strong>
                            <small>Tokyo, Japan</small>
                        </div>
                    </div><!-- media -->
                </li>
            </ul>
            
            <div class="mb30"></div>
            
            <h5 class="sidebartitle">Offline Users</h5>
            <ul class="chatuserlist">
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user5.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Eileen Sideways</strong>
                            <small>Los Angeles, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user2.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Zaham Sindilmaca</strong>
                            <small>San Francisco, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user3.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Nusja Nawancali</strong>
                            <small>Bangkok, Thailand</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Renov Leongal</strong>
                            <small>Cebu City, Philippines</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user5.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Weno Carasbong</strong>
                            <small>Tokyo, Japan</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Renov Leongal</strong>
                            <small>Cebu City, Philippines</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user5.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Weno Carasbong</strong>
                            <small>Tokyo, Japan</small>
                        </div>
                    </div><!-- media -->
                </li>
            </ul>
        </div>
        <div class="tab-pane" id="rp-favorites">
            <h5 class="sidebartitle">Favorites</h5>
            <ul class="chatuserlist">
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user2.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Eileen Sideways</strong>
                            <small>Los Angeles, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user1.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Zaham Sindilmaca</strong>
                            <small>San Francisco, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user3.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Nusja Nawancali</strong>
                            <small>Bangkok, Thailand</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Renov Leongal</strong>
                            <small>Cebu City, Philippines</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user5.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Weno Carasbong</strong>
                            <small>Tokyo, Japan</small>
                        </div>
                    </div><!-- media -->
                </li>
            </ul>
        </div>
        <div class="tab-pane" id="rp-history">
            <h5 class="sidebartitle">History</h5>
            <ul class="chatuserlist">
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Eileen Sideways</strong>
                            <small>Hi hello, ctc?... would you mind if I go to your...</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user2.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Zaham Sindilmaca</strong>
                            <small>This is to inform you that your product that we...</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user3.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Nusja Nawancali</strong>
                            <small>Are you willing to have a long term relat...</small>
                        </div>
                    </div><!-- media -->
                </li>
            </ul>
        </div>
        <div class="tab-pane pane-settings" id="rp-settings">
            
            <h5 class="sidebartitle mb20">Settings</h5>
            <div class="form-group">
                <label class="col-xs-8 control-label">Show Offline Users</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle toggle-success"></div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-xs-8 control-label">Enable History</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle toggle-success"></div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-xs-8 control-label">Show Full Name</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle-chat1 toggle-success"></div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-xs-8 control-label">Show Location</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle toggle-success"></div>
                </div>
            </div>
            
        </div><!-- tab-pane -->
        
    </div><!-- tab-content -->
  </div><!-- rightpanel -->
  
</section>





<div class="modal fade bs-example-modal-photo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-photo-viewer">
    <div class="modal-content"></div>
  </div>
</div>
<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/jquery-migrate-1.2.1.min.js"></script>
		<script src="js/jquery-ui-1.10.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/modernizr.min.js"></script>
		<script src="js/jquery.sparkline.min.js"></script>
		<script src="js/toggles.min.js"></script>
		<script src="js/retina.min.js"></script>
		<script src="js/jquery.cookies.js"></script>

		<script src="js/jquery.autogrow-textarea.js"></script>
		<script src="js/bootstrap-fileupload.min.js"></script>
		<script src="js/bootstrap-timepicker.min.js"></script>
		<script src="js/jquery.maskedinput.min.js"></script>
		<script src="js/jquery.tagsinput.min.js"></script>
		<script src="js/jquery.mousewheel.js"></script>
		<script src="js/chosen.jquery.min.js"></script>
		<script src="js/dropzone.min.js"></script>
		<script src="js/colorpicker.js"></script>

		<script src="js/custom.js"></script>

		
		<script>
			jQuery(document).ready(function()
			{

				// Chosen Select
				jQuery(".chosen-select").chosen(
				{
					'width' : '100%',
					'white-space' : 'nowrap'
				});

				// Tags Input
				jQuery('#tags').tagsInput(
				{
					width : 'auto'
				});

				// Textarea Autogrow
				jQuery('#autoResizeTA').autogrow();

				// Color Picker
				if (jQuery('#colorpicker').length > 0)
				{
					jQuery('#colorSelector').ColorPicker(
					{
						onShow : function(colpkr)
						{
							jQuery(colpkr).fadeIn(500);
							return false;
						},
						onHide : function(colpkr)
						{
							jQuery(colpkr).fadeOut(500);
							return false;
						},
						onChange : function(hsb, hex, rgb)
						{
							jQuery('#colorSelector span').css('backgroundColor', '#' + hex);
							jQuery('#colorpicker').val('#' + hex);
						}
					});
				}

				// Color Picker Flat Mode
				jQuery('#colorpickerholder').ColorPicker(
				{
					flat : true,
					onChange : function(hsb, hex, rgb)
					{
						jQuery('#colorpicker3').val('#' + hex);
					}
				});

				// Date Picker
				jQuery('#datepicker').datepicker();

				jQuery('#datepicker-inline').datepicker();

				jQuery('#datepicker-multiple').datepicker(
				{
					numberOfMonths : 3,
					showButtonPanel : true
				});

				// Spinner
				var spinner = jQuery('#spinner').spinner();
				spinner.spinner('value', 0);

				// Input Masks
				jQuery("#date").mask("99/99/9999");
				jQuery("#phone").mask("(999) 999-9999");
				jQuery("#ssn").mask("999-99-9999");

				// Time Picker
				jQuery('#timepicker').timepicker(
				{
					defaultTIme : false
				});
				jQuery('#timepicker2').timepicker(
				{
					showMeridian : false
				});
				jQuery('#timepicker3').timepicker(
				{
					minuteStep : 15
				});

			});
		</script>
		<script>
  jQuery(window).load(function(){
  
    var container = document.querySelector('#timeline-list');
    var msnry = new Masonry( container, {
      // options
      columnWidth: '.col-sm-6',
      itemSelector: '.col-sm-6'
    });
    
    // check on load
    if(jQuery(window).width() <= 640 )
        msnry.destroy();

    // check on resize
    jQuery(window).resize(function(){
        if(jQuery(this).width() <= 640 )
            msnry.destroy();
    });
    
  });
</script>
</body>
</html>
