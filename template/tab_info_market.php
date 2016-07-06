
<?php

	
	 if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
		header('location:index.php'); //ke halaman index utama
    }
	$nama= $_SESSION['nama'];
	$email = $_SESSION['username'];
	
	
	//cari foto yg login
	$queryFoto = mysql_query("SELECT p.pictureprofile FROM tsilabtan_user p where p.username = '$email'")   ; 
	$hasilFoto = mysql_fetch_array($queryFoto);
	$numRowsFoto = mysql_num_rows($queryFoto);
	if($numRowsFoto > 0){
		$idAlamatFoto = $hasilFoto['pictureprofile'];
		
	}
	if(isset($_REQUEST['kota'])){
	$idcity = $_REQUEST['kota'];
	}else{
	$idcity = "";
	}
	if(isset($_REQUEST['produk'])){
	$idproduct = $_REQUEST['produk'];
	}else{
	$idproduct = "";
	}
	if(isset($_REQUEST['harga'])){
	$price = $_REQUEST['harga'];
	}else{
	$price = "";
	}
	if(isset($_REQUEST['satuan'])){
	$idsatuan = $_REQUEST['satuan'];
	}else{
	$idsatuan = "";
	}
	if(isset($_REQUEST['status'])){
	$komentar = $_REQUEST['status'];
	}else{
	$komentar = "";
	}
	if(isset($_REQUEST['idkomen'])){
	$commentup = $_REQUEST['idkomen'];
	}else{
	$commentup = "";
	}
	if(isset($_REQUEST['jualbeli'])){
	$jualbeli = $_REQUEST['jualbeli'];
	}else{
	$jualbeli = "";
	}
	if(isset($_REQUEST['idKomen'])){
	$idKomen = $_REQUEST['idKomen'];
	}else{
	$idKomen = "";
	}
	if(isset($_REQUEST['komen'])){
	$komen = $_REQUEST['komen'];
	}else{
	$komen = "";
	}
	if(isset($_FILES['afile']['name'])){
	$fileName = "./uploads/".$_FILES['afile']['name'];
	}else{
	$fileName = "";
	}
	if(isset($_FILES['afile']['type'])){
	$fileType = $_FILES['afile']['type'];
	}else{
	$fileType = "";
	}
	//$fileContent = file_get_contents($_FILES['afile']['tmp_name']);
	
	if($komentar != '' ){
		if(isset($_FILES['afile']['name'])){
			if (move_uploaded_file($_FILES["afile"]["tmp_name"], $fileName)) {
					//echo "The file ". basename( $_FILES["afile"]["name"]). " has been uploaded.";
				} else {
					//echo "Sorry, there was an error uploading your file.";
				}
		}else{
		}
	
	
				
		
		//inserting into table status
		//...........................
		
		$time=date("y/m/d H:i:s", strtotime("now"));
		//echo $time;
		if($komentar != ''){ // and $commentup != ''){
			$query = mysql_query("INSERT INTO tsilabtan_status(username, status, tsi_idstatus, datecreated, attachment,generalsellorneedorinfo) VALUES('$email','$komentar','$commentup','$time','$fileName','$jualbeli')");
			//echo "INSERT INTO commentpengguna VALUES('','".$email."','".$komentar."','".$commentup."','".$time."')";
		}
		
		
		//inserting into table infoMarket
		//..........................
		$queryKomen = mysql_query("SELECT max(idstatus) idstatus FROM tsilabtan_status where username = '$email' ");
		$hasil=mysql_fetch_array($queryKomen);
		$idstatus = $hasil['idstatus'];
		//echo $idstatus." ".$idcity." ".$idmeasureunit." ".$price." ".$stock;
		if($jualbeli = "market"){
			$query = mysql_query("INSERT INTO tsilabtan_infomarket(kota,idproduct,idstatus,price, idmeasureunit) VALUES('$idcity', '$idproduct', '$idstatus', '$price','$idsatuan')");
			//echo "INSERT INTO tsilabtan_sell(kota,idmeasureunit,idstatus,price,stock) VALUES('$idcity', '$idsatuan','$idsatuan2','$idstatus','$price','$stock')";
		}
		
		
		
	}
	else if($idKomen != '' && $komen != ''){
		$time=date("y/m/d H:i:s", strtotime("now"));
		//echo $time;
		
			$query = mysql_query("INSERT INTO tsilabtan_status(username, status, tsi_idstatus, datecreated) VALUES('$email','$komen','$idKomen','$time')");
			//echo "INSERT INTO commentpengguna VALUES('','".$email."','".$komentar."','".$commentup."','".$time."')";
		
	}
	else{}

	if(isset($_SESSION['search'])){ 
		$search = " AND st.status like '%".$_SESSION['search']."%'";
	}else{
		$search = '';
	}	
	/*$queryKomen = mysql_query("SELECT st.idstatus, st.datecreated, st.username, st.status, st.attachment,
       u.fullname,p.NAMEOFPRODUCT,u.pictureprofile, CONCAT(mr.nameofmarket,', ',d.NAMEOFDISTRICT,',',c.NAMEOFCITY,', ') kota,
      CONCAT( p.NAMEOFPRODUCT, ' harga: ',i.PRICE, '/',m.NAMEOFMEAUNIT,', ') berita
		FROM tsilabtan_infomarket i
		JOIN tsilabtan_market mr ON(mr.IDMARKET = i.KOTA)
		JOIN tsilabtan_district d ON (mr.IDDISTRICT = d.IDDISTRICT)
		JOIN tsilabtan_city c ON (d.IDCITY = c.IDCITY)
		JOIN tsilabtan_status st ON (st.IDSTATUS = i.IDSTATUS)
		JOIN tsilabtan_product p ON (p.IDPRODUCT = st.IDPRODUCT)
		JOIN tsilabtan_user u ON (u.USERNAME = st.USERNAME)
		JOIN tsilabtan_measureunit m ON(m.IDMEASUREUNIT = i.IDMEASUREUNIT)
		WHERE st.tsi_idstatus='null'
		$search
		ORDER BY st.idstatus DESC
							");
	*/
	$queryKomen = mysql_query("SELECT st.idstatus, st.datecreated, st.username, st.status, st.attachment,
       u.fullname,p.NAMEOFPRODUCT,u.pictureprofile, CONCAT(mr.nameofmarket,',',c.NAMEOFCITY,', ') kota,
      CONCAT( p.NAMEOFPRODUCT, ' harga: ',i.PRICE, '/',m.NAMEOFMEAUNIT,', ') berita
		FROM tsilabtan_infomarket i
		JOIN tsilabtan_market mr ON(mr.IDMARKET = i.KOTA)
		JOIN tsilabtan_city c ON (mr.IDCITY = c.IDCITY)
		JOIN tsilabtan_status st ON (st.IDSTATUS = i.IDSTATUS)
		JOIN tsilabtan_product p ON (p.IDPRODUCT = i.IDPRODUCT)
		JOIN tsilabtan_user u ON (u.USERNAME = st.USERNAME)
		JOIN tsilabtan_measureunit m ON(m.IDMEASUREUNIT = i.IDMEASUREUNIT)
		WHERE st.tsi_idstatus='null'
		AND st.username = '".$_SESSION['username']."'
		ORDER BY st.idstatus DESC
							");
	
	$numRows = mysql_num_rows($queryKomen);
	//echo "wokee";
	
	while ($hasilKomen  = mysql_fetch_array($queryKomen)){
	
		
		$idComment = $hasilKomen['idstatus'];
		if($hasilKomen['pictureprofile']==null){
			$fotoprofil="./images/ppdefault.jpg";
		}else{
			$fotoprofil=$hasilKomen['pictureprofile'];
		}
		if($hasilKomen['attachment']==null){
			$status="";
			$fotoattach="";
		}else{
			$status="shared photo";
			$fotoattach=$hasilKomen['attachment'];
		}
		//echo "id komen = ".$idComment;
		echo "<div class='col-sm-12' id='div$idComment'>
          <div class='panel panel-default panel-timeline'>
            <div class='panel-heading'>
                
                <div class='media'>
                    <a href='#' class='pull-left'>
                        <img alt='' src='".$fotoprofil."' class='media-object'>
                    </a>
                    <div class='media-body'>
                        <h4 class='text-primary'>".$hasilKomen['fullname']." <small>".$status."<BR />"."</small></h4>
                        <small class='text-muted'>".$hasilKomen['datecreated']."</small>
                    </div>
                </div><!-- media -->
                
            </div><!-- panel-heading -->
            <div class='panel-body'>
                
                <div class='media'>
				"
				;
				if($hasilKomen['attachment']==null){
				}else{
				echo
				"
                <a id='images' class='pull-left photo' data-toggle='modal' data-target='.bs-example-modal-photo' xid='".$hasilKomen['idstatus']."'>
                  <img alt='' src='".$hasilKomen['attachment']."' class='media-object'>
                </a>
				";
				}
				echo
				"
                <div class='media-body'>
           
                  <p>".$hasilKomen['status']." <br>".$hasilKomen['NAMEOFPRODUCT'].", ".$hasilKomen['kota'].$hasilKomen['berita']."</p>
                </div>
              </div>
                
                <div class='timeline-btns'>
                    <div class='pull-left'>
                        <a href='' class='tooltips' data-toggle='tooltip' title='Like'><i class='glyphicon glyphicon-heart'></i></a>
                        <a href='' class='tooltips' data-toggle='tooltip' title='Add Comment'><i class='glyphicon glyphicon-comment'></i></a>
                        <a href='' class='tooltips' data-toggle='tooltip' title='Share'><i class='glyphicon glyphicon-share'></i></a>
                    </div>
                    <div class='pull-right'>
                        <small class='text-muted'>0 people like this</small>
                    </div>
                </div>
            </div><!-- panel-body -->
            <div class='panel-footer'>
                ";
					$queryKomenTurunan = mysql_query("SELECT cp.idstatus, cp.username, cp.status, p.fullname,p.pictureprofile FROM tsilabtan_status cp JOIN tsilabtan_user p ON (cp.username = p.username) where cp.tsi_idstatus='".$idComment."' order by cp.idstatus ASC");
					while ($hasilKomenTurunan  = mysql_fetch_array($queryKomenTurunan)){
					if($hasilKomenTurunan['pictureprofile']==null){
					$profilkomen="./images/ppdefault.jpg";
					}else{
					$profilkomen=$hasilKomenTurunan['pictureprofile'];
					}
					echo "
				<div class='media'>
                    <a href='#' class='pull-left'>
                        <img alt='' src='".$profilkomen."' class='media-object'>
                    </a>
					<div class='media-body'>
                        <h6 class='text-primary'>".$hasilKomenTurunan['fullname']."</h6>".$hasilKomenTurunan['status']."
                    </div>
                </div><!-- media -->
				";
					}
					echo "
				<div class='media'>
                    <a href='#' class='pull-left'>
					";
						if($numRowsFoto > 0){
						$idAlamatFoto = $hasilFoto['pictureprofile'];
							if($idAlamatFoto==null){
							$idAlamatFoto="./images/ppdefault.jpg";
							}else{
							$idAlamatFoto = $hasilFoto['pictureprofile'];
							}
						echo "<img alt='' src='$idAlamatFoto' class='media-object'>";
						}
					echo "
                        </a>
					<div class='media-body'>
					<div class='input-group mb15'>
                        <textarea rows='1' id='$idComment' class='form-control' placeholder='Tulis komentar...'></textarea>
						<span class='input-group-btn'>
												<input type='button' value='Send' onclick='test2($idComment)' class='btn btn-default' />
												</span>
                    </div>
					</div>
                </div><!-- media -->
				";
					echo "
			</div>
          </div><!-- panel -->
        </div><!-- col-sm-6 -->";
	}

?>