

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
	  xmlhttp.open("GET","ajaxJualTest.php", true);//+"&strID="+strID, true);
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
				xhr.open('GET', "searchJual.php?komentar="+term+"&jenis=jual", true);
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
		
		var satuan = document.getElementById("listSatuan").value;
		var kuantitas = document.getElementById("kuantitasProduk").value;
		var idkomen = document.getElementById("idcomment").value;
		var jualbeli= document.getElementById("jualbeli").value;
		var status = document.getElementById("kolom_status").value;
		var kota = document.getElementById("listKota").value;
		var produk = document.getElementById("listProduk").value;
		var harga = document.getElementById("inputHargaProduk").value;
		var satuan2 = document.getElementById("listSatuan2").value;
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
		if (satuan2 != ''){
			fd.append('satuan2',satuan2);
		}
		if (kuantitas != ''){
			fd.append('kuantitas',kuantitas);
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
		xhr.open('POST', 'ajaxJualTest.php', true);
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
				document.getElementById("listSatuan2").value = "";
				document.getElementById("kuantitasProduk").value = '';
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
			xhr.open('POST', 'ajaxJualTest.php', true);
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
$('#hasil').load('ajaxJualTest.php')
})
</script>
        
    <div class="pageheader">
      <h2><i class="fa fa-clock-o"></i> Info Jual <span>Subtitle goes here...</span></h2>
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
            <div class="panel panel-dark panel-alt ">
			<form id="form" name="form">
				<div class="panel-header">
				<center><h2>Kirim Info Jual</h2></center>
				</div>
				<div class="panel-body">
					
					<div class="form-group">
                    <!--
					<div class="col-sm-5">
					<input type="text" id="inputKota" name="kota" value="" class="form-control" title="Your name is !" placeholder="Ketik nama pasar/lokasi di sini..."  onkeyup="show(this.value,'pasar');"/>
					</div>
					-->
					
					<select id="listKota" name="namaKota" class="form-control chosen-select" data-placeholder="Pilih nama lokasi">
					<option value=""></option>
					<?php 
					$query = mysql_query("SELECT c.idcity, d.iddistrict, concat(c.nameofcity,',',d.nameofdistrict) AS kota
							  FROM tsilabtan_city c 
							  JOIN tsilabtan_district d ON (c.idcity = d.idcity)
							");
							
		$numrows = mysql_num_rows($query);
		while($row = mysql_fetch_array($query)){
			echo "<option value='".$row['iddistrict']."'>".$row['kota']."</option>";
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
					<select id="listSatuan" name="namaSatuan" class="form-control chosen-select" title="Your name is required!" >
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
					<div class="col-sm-5">
                    <input type="text" id="kuantitasProduk" name="harga" value="" class="form-control" title="Your name is !" placeholder="Ketik stock produk di sini..."  />
					</div>
					
					<div class="col-sm-7">
					<select id="listSatuan2" name="namaSatuan2" class="form-control chosen-select" title="Your name is required!" >
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
					    <input type="text" style="display: none;" id="jualbeli" name="jualbeli" value="jual">
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
