<?php
	$fh=fopen( 'report.txt', 'w');
	include 'koneksi.php';
	$res=mysql_query("SELECT  cp.status 
								FROM tsilabtan_status cp 
								JOIN tsilabtan_user p ON (cp.username = p.username) 
								WHERE cp.tsi_idstatus='0' AND cp.generalsellorneedorinfo IS NULL
								ORDER BY cp.idstatus DESC
								LIMIT 50");
	$output=' ';
	while($row = mysql_fetch_array($res)){
	$num=mysql_num_fields($res);
	$last=$num-1;
	for($i=0;$i<$num;$i++){
			fwrite($fh,$row[$i]);
			if($i !=$last){
				fwrite($fh,",");
				
			}	
	}fwrite($fh,"\n");
	}fclose($fh);
	
	exec('"C:\Program Files\R\R-3.2.3\bin\Rscript.exe" "source\rscript.r" 2>&1', $output);
	
	 if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
		header('location:signin.php'); //ke halaman index utama
    }
	
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
<?php 
include('koneksi.php');
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
	  xmlhttp.open("GET","ajaxUmumTest.php", true);//+"&strID="+strID, true);
	  //&nama="+nama,true);
	  xmlhttp.send();
	  //document.getElementById(1).value = "";
	  //document.getElementById(1).placeholder = "ketik status di sini...";
	}
	
</script>
<script>

function readURL(input) {
	
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
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
		alert("telo");
		
		
		var status = document.getElementById("status2").value;
		
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
				
				document.getElementById("status2").value = '';
				document.getElementById('fileToUpload').files[0] = '';
				$('#blah').hide();
				
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
	function action_enter(idkomen){
		if (event.keyCode == 13){
			test2(idkomen);
		}
	}
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
					
					document.getElementById("status2").value = '';
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
$('#hasil').fadeOut('slow').load('ajaxUmumTest.php').fadeIn("slow");
}, 30000);
$(document).ready(function(){
$('#hasil').load('ajaxUmumTest.php')
})
</script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript">
	  
	  window.onload = function() {
        try {
          TagCanvas.Start('myCanvas','tags',{
            tooltip: 'div',
			textColour: '#369',
			textHeight: 25,
            outlineColour: '#acf',
			outlineMethod: "block",
			outlineThickness: 5,
			outlineOffset: 5,
			pulsateTo: 0.2,
			pulsateTime: 0.75,
            reverse: true,
            depth: 0.8,
            maxSpeed: 0.02,
			minBrightness: 0.2,
			dragControl: false,
			tooltip: 'native',
			tooltipDelay: 100,
			clickToFront: 600,
			centreImage: 'images/wifiid.png',
			imagePadding: 200,
			wheelZoom: false,
			weight: true,
			weightFrom: 'data-weight',
			weightMode: 'size',
			weightSize: 1.5,
			weightSizeMax: 40,
			weightSizeMin: 12,
          });
        } catch(e) {
          document.getElementById('myCanvasContainer').style.display = 'none';
        }
      };
	  </script>
  
    
        
   
<div class="pageheader">
	<h2><i class="fa fa-clock-o"></i> Timeline <span>Subtitle goes here...</span></h2>
	<div class="breadcrumb-wrapper">
		<span class="label">You are here:</span>
		<ol class="breadcrumb">
			<li>
				<a href="infoUmum.php">Silabtan</a>
			</li>
			<li>
				<a href="infoUmum.php">Pages</a>
			</li>
			<li class="active">
				Timeline
			</li>
		</ol>
	</div>
</div>

<div class="contentpanel">
<?= (isset($_SESSION['search'])) ? $_SESSION['search'] : ""; ?>
	<div class="col-sm-6">
		<div class="col-sm-12 panel panel-dark panel-alt timeline-post">
			<form id="form" name="form" style="border: 1px solid #DDD;">
				<div class="panel-body">
					<textarea placeholder="Write something..." class="form-control" name="status" id="status2"></textarea>
				</div><!-- panel-body -->
				<div class="panel-footer">
					<div class="timeline-btns pull-left">
						<input type="file" name="fileToUpload" id="fileToUpload" value="Pilih File" accept="image/*" style="display:none"/>
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
	<div class="col-sm-6">
			<div id="myCanvasContainer" style="float:left; background-color:none;padding-left:-10px;">
				<canvas width='500' height='450' id="myCanvas" style="margin-left:50px;">
					<p>Anything in here will be replaced on browsers that support the canvas element</p>
				</canvas>
		</div>
			<div width='50' height='30' id="tags" style="float:left; background-color:none; ">
				<ul>
				<?php 
					if(($handle = fopen("freq.txt", "r")) !== FALSE){
						
						while (($data = fgetcsv($handle, 100, "\t")) !== FALSE){
						var_dump($data);
						echo "<li><a href='?page=proses_word_cloud&search=".$data[0]."' data-weight='".$data[1]."' title='".$data[1]."'>".$data[0]."</a></li>";
						}
					}
				?>
				</ul>
			</div>
			
	
	<!--</textarea>-->

	<p id="demo"></p>
	</div>
</div>
<div class="modal fade bs-example-modal-photo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-photo-viewer">
		<div class="modal-content"></div>
	</div>
</div>
			
	
	<!--</textarea>-->

	<p id="demo"></p>
	<script>
	function tpu(s){
		document.getElementById('sout').innerHTML = s.innerHTML;
		z=s.innerHTML;
		tpa(z);
		return false;
	}
	
	function tpa(d){
		var xhttp = new XMLHttpRequest();
		var file = d+'.txt';
		xhttp.open("GET", file, false);
		xhttp.send();
		var y=xhttp.responseText;
		var yr=y.split("\n");
		//for(var i in yr){
			var teks="";
			var c=1;
			var p=0;
			var n=0;
			var nt=0;
		for(i=0;i<yr.length;i++){
		var ar=yr[i].split("\t");
		var tes=ar[1];
		var tr=tes.trim();
	//	alert(ar[0]);
		if(tr=="positif"){
			var col="blue";
			p++;
		}
		if(tr=="negatif"){
			var col="red";
			n++;
		}
		if(tr=="netral"){
			var col="green";
			nt++;
		}
		//alert(ar[0] + " "+ col);
		teks += c+". "+ar[0].fontcolor(col)+"<br>";
		//alert (teks);
		document.getElementById("sout2").innerHTML = teks;
		c++;
		//y.replace(/(\r\n|\n\r|\r|\n)/g,"<br>");
		//else{document.getElementById("sout2").innerHTML = ar[0];}
		//xmlhttp.open("GET","analisa.php?file="+file,true);
		//xmlhttp.send();
	}
	
	}
	</script>
		</div>
	  </div>
	</div>
    
  <script>
  function upload_gambar(){
	$("#fileToUpload").trigger('click');
	//alert("test");
  }
  
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
  
  $("#fileToUpload").change(function(){
    //alert("test");
	$('#blah').show();
	readURL(this);
});
</script>

<style type="text/css">
	#tags_tagsinput{
		display: none;
	}

	#myCanvasContainer{
		width: 500px;
	}
</style>

