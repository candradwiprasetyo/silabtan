<?php 
$username_profile = (isset($_SESSION['username'])) ? $_SESSION['username'] : '';
$q_profile = mysql_query("select * from tsilabtan_user where username = '".$username_profile."'");
$r_profile = mysql_fetch_array($q_profile);

?>
<div class="pageheader">
      <h2><i class="fa fa-clock-o"></i> My Profile</h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="infoUmum.php">Silabtan</a></li>
          <li><a href="infoUmum.php">Pages</a></li>
          <li class="active">Profile</li>
        </ol>
      </div>
    </div>

    <div class="contentpanel">
      
      <div class="row" >
        
        <div class="col-sm-12" style="position: relative;">


        	<!-- start profile -->

        	<div class="row">
        <div class="col-sm-3">
          <img src="<?= $r_profile['PICTUREPROFILE'] ?>" class="thumbnail img-responsive" alt="" />
          
          <div class="mb30"></div>
          
          <h5 class="subtitle">About</h5>
          <p class="mb30"><?= $r_profile['about'] ?><a href="">Show More</a></p>
          
          <!--<h5 class="subtitle">Connect</h5>
          <ul class="profile-social-list">
            <li><i class="fa fa-twitter"></i> <a href="">twitter.com/eileensideways</a></li>
            <li><i class="fa fa-facebook"></i> <a href="">facebook.com/eileen</a></li>
            <li><i class="fa fa-youtube"></i> <a href="">youtube.com/eileen22</a></li>
            <li><i class="fa fa-linkedin"></i> <a href="">linkedin.com/4ever-eileen</a></li>
            <li><i class="fa fa-pinterest"></i> <a href="">pinterest.com/eileen</a></li>
            <li><i class="fa fa-instagram"></i> <a href="">instagram.com/eiside</a></li>
          </ul>-->
          
          <div class="mb30"></div>
          
          <h5 class="subtitle">Address</h5>
          	
          <div class="profile-location"><i class="fa fa-map-marker"></i> Address : <?= $r_profile['ADDRESS'] ?></div>
            <div class="profile-location">Phone number : <?= $r_profile['CELLPHONENUMBER'] ?></div>
            <div class="profile-location">Home Phone number : <?= $r_profile['HOMEPHONENUMBER'] ?></div>
           	<div class="profile-location">Office Phone number : <?= $r_profile['OFFICEPHONENUMBER'] ?></div>
            <div class="mb20"></div>
          
        </div><!-- col-sm-3 -->
        <div class="col-sm-9">
    	<?php
    	$q_j_post = mysql_query("select count(*) as jml from tsilabtan_status where username= '".$_SESSION['username']."'
    		and tsi_idstatus = 0
    		");
    	$r_j_post = mysql_fetch_array($q_j_post);
    	$r_j_post = ($r_j_post['jml']) ? $r_j_post['jml'] : 0; 

    	$q_j_comment = mysql_query("select count(*) as jml from tsilabtan_status where username= '".$_SESSION['username']."'
    		and tsi_idstatus <> 0
    		");
    	$r_j_comment = mysql_fetch_array($q_j_comment);
    	$r_j_comment = ($r_j_comment['jml']) ? $r_j_comment['jml'] : 0; 


    	?>
          <div class="profile-header">
            <h2 class="profile-name"><?= $r_profile['FULLNAME'] ?></h2>
            <div class="profile-location">Post : <?= $r_j_post ?></div>
            <div class="profile-location">Comment : <?= $r_j_comment ?></div>
            
            
            
          </div><!-- profile-header -->
          
          <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified nav-profile">
          <li class="active"><a href="#info_umum" data-toggle="tab"><strong>Info Umum</strong></a></li>
          <li><a href="#info_jual" data-toggle="tab"><strong>Info Jual</strong></a></li>
           <li><a href="#info_beli" data-toggle="tab"><strong>Info Beli</strong></a></li>
            <li><a href="#info_market" data-toggle="tab"><strong>Info Market</strong></a></li>
         
        </ul>
        
        <!-- Tab panes -->
       
        <div class="tab-content">
          <div class="tab-pane active" id="info_umum">
          	
          	<?php include 'tab_info_umum.php'; ?>

          </div>
          <div class="tab-pane" id="info_jual">
            
            <?php include 'tab_info_jual.php'; ?>

            
          </div>
          <div class="tab-pane" id="info_beli">
            
            <?php include 'tab_info_beli.php'; ?>
            
           
            
          </div>
          <div class="tab-pane" id="info_market">
            <?php include 'tab_info_market.php'; ?>
          </div>
        </div><!-- tab-content -->
        
          
        </div><!-- col-sm-9 -->
      </div><!-- row -->

        	<!-- end profile -->

			
        </div><!-- col-sm-6 -->	
		<div class="col-sm-6">
			
			
	
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