<?php
set_time_limit(0);

include "koneksi.php";
$IDPRODUCT=0;
$IDMARKET='';
$IDCITY='';
$IDMEASUREUNIT='';
$date = $_POST['tanggal'];
//$area = $_POST['area'];
//$pasar = $_POST['pasar'];

if($_POST['submit']=="Cek"){
	if($_POST['jenis']=="produsen"){
	header('location:'.$base_url.'infoMarket_grab&tanggal='.$_POST['tanggal'].'&jenis='.$_POST['jenis']);
	}else{
	header('location:'.$base_url.'infoMarket_grab&tanggal='.$_POST['tanggal'].'&jenis='.$_POST['jenis'].'&area='.$_POST['area'].'&pasar='.$_POST['pasar']);	
	}
}else if($_POST['submit']=="Save"){
 if($_POST['jenis']=="konsumen"){

$url = 'http://siskaperbapo.com/harga/tabel.nodesign/';

$d = explode("-", $date);
$new_date = $d[2]."-".$d[1]."-".$d[0];
							


mysql_query("DELETE FROM tsilabtan_titik_pantau_konsumen WHERE tanggal='".$new_date."'");
	$sql_kota=mysql_query("SELECT * FROM tsilabtan_city");
	while($row_kota=mysql_fetch_array($sql_kota)){
		//echo "KOTA : ".$row_kota['NAMEOFCITY']."<BR />";
			$sql_pasar=mysql_query("SELECT * FROM tsilabtan_market WHERE IDCITY='".$row_kota['IDCITY']."'");
			while($row_pasar=mysql_fetch_array($sql_pasar)){
				//echo "   PASAR : ".$row_pasar['NAMEOFMARKET']."<BR />";
				$ch = curl_init();
 
 
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, array('tanggal'=>$new_date, 'area'=>$row_kota['CODECITY'], 'pasar'=>$row_pasar['IDMARKET']));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
				
				$dom = new DOMDocument();
    @$dom->loadHTML($output);
    $tables = $dom->getElementsByTagName('tr');
    foreach($tables as $div) {
		$tds = $div->getElementsByTagName('td');
			$a=0;
			foreach($tds as $divs) {
				
				switch($a){
					case 0:
						//echo "No: ".$divs->nodeValue."<BR />";
					break;
					case 1:
						//echo $IDPRODUCT;
						if(strpos($divs->nodeValue, "-")){
							$explode_min=explode("-",$divs->nodeValue);
							$node=trim($explode_min[1]);
						}else{
							$node=$divs->nodeValue;
						}
						$produk=$divs->nodeValue;
						//$explode_min=explode("-",$divs->nodeValue);
						//$node=trim($explode_min[1]);
						$queryKomen = mysql_query("
						SELECT * FROM tsilabtan_product WHERE NAMEOFPRODUCT LIKE '%".$node."%'
							") or die(mysql_error());
						$hasilKomen  = mysql_fetch_array($queryKomen);
							$IDPRODUCT=$hasilKomen['IDPRODUCT'];
						
						//echo $divs->nodeValue."|".$IDPRODUCT."<BR />";
						break;
					case 2:
							$queryKomen = mysql_query("
						SELECT IDMEASUREUNIT FROM tsilabtan_measureunit WHERE IDMEASUREUNIT='".$divs->nodeValue."'
							") or die(mysql_error());
						while($hasilKomen  = mysql_fetch_array($queryKomen)){
							$IDMEASUREUNIT=$hasilKomen['IDMEASUREUNIT'];
						}
					break;
					case 3:
						$HARGAKEMARIN=$divs->nodeValue;
						//echo $divs->nodeValue."|".$IDPRODUCT."<BR />";
					break;
					case 4:
						$HARGASEKARANG=$divs->nodeValue;
					
						//echo "Satuan: ".$divs->nodeValue."<BR />";
					break;
					case 5:
						//$HARGAKEMARIN=$divs->nodeValue;
						//echo "Harga Kemarin: ".$divs->nodeValue."<BR />";
					break;
					case 6:
						//$HARGASEKARANG=$divs->nodeValue;
						//echo "Harga Sekarang: ".$divs->nodeValue."<BR />";
					break;
				}
				if($a==6){
					if(strpos($produk,'Semen') || strpos($produk,'SEMEN') 
					|| strpos($produk,'Daging') 
					|| strpos($produk,'DAGING') 
					|| strpos($produk,'Telur') 
					|| strpos($produk,'TELUR') 
					|| strpos($produk,'MINYAK') 
					|| strpos($produk,'Minyak') 
					|| strpos($produk,'MIE') 
					|| strpos($produk,'cm') 
					|| strpos($produk,'Cm') 
					|| strpos($produk,'mm') 
					|| strpos($produk,'MM') 
					|| strpos($produk,'KAYU') 
					|| strpos($produk,'BESI') 
					|| strpos($produk,'PAKU') 
					|| strpos($produk,'GAS') 
					|| strpos($produk,'mie') 
					|| strpos($produk,'Bimoli') 
					|| strpos($produk,'Curah') 
					|| strpos($produk,'GARAM') 
					|| strpos($produk,'Bata') 
					|| strpos($produk,'Halus') 
					|| strpos($produk,'Susu') 
					|| strpos($produk,'SUSU') 
					|| strpos($produk,'Kental Manis') 
					|| strpos($produk,'ikan') 
					|| strpos($produk,'Ikan') 
					|| strpos($produk,'IKAN')){}else{
						if($HARGAKEMARIN==''){}
						else{
							$sql_city=mysql_query("SELECT * FROM tsilabtan_city WHERE IDCITY='".$row_kota['IDCITY']."'");
							$row_city=mysql_fetch_array($sql_city);
							$codeofcity=$row_city['CODECITY'];
							
							mysql_query("INSERT INTO tsilabtan_titik_pantau_konsumen VALUES('','".$IDPRODUCT."','".$row_pasar['IDMARKET']."','".$codeofcity."','".$IDMEASUREUNIT."','".$HARGAKEMARIN."','".$HARGASEKARANG."','".$new_date."')");
						}
					//echo "INSERT INTO tsilabtan_market_produsen VALUES('','".$IDPRODUCT."','".$IDMARKET."','".$IDCITY."','".$IDMEASUREUNIT."','".$HARGAKEMARIN."','".$HARGASEKARANG."','".$date."') <BR />";
					}
				}
				$a++;
			}
		////echo "<BR />";
	}
	
			}
	}
	

}elseif($_POST['jenis']=="produsen"){
$url = 'http://siskaperbapo.com/produsen/tabel.nodesign/';

$d = explode("-", $date);
$new_date = $d[2]."-".$d[1]."-".$d[0];

$ch = curl_init();
 
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, array('tanggal'=>$new_date));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);



mysql_query("DELETE FROM tsilabtan_titik_pantau_produsen WHERE tanggal='".$new_date."'");
	$dom = new DOMDocument();
    @$dom->loadHTML($output);
    $tables = $dom->getElementsByTagName('tr');
    foreach($tables as $div) {
		$tds = $div->getElementsByTagName('td');
			$a=0;
			foreach($tds as $divs) {
				
				switch($a){
					case 0:
						//echo "No: ".$divs->nodeValue."<BR />";
					break;
					case 1:
						//echo $IDPRODUCT;
						$produk=$divs->nodeValue;
						$node=trim($divs->nodeValue);
						$queryKomen = mysql_query("
						SELECT * FROM tsilabtan_product WHERE NAMEOFPRODUCT = '".$node."'
					
					") or die(mysql_error());
						$hasilKomen  = mysql_fetch_array($queryKomen);
							$IDPRODUCT=$hasilKomen['IDPRODUCT'];
						
						//echo $divs->nodeValue."|".$IDPRODUCT."<BR />";
						break;
					case 2:
							$IDMARKET=$divs->nodeValue;
					break;
					case 3:
						$queryKomen = mysql_query("
						SELECT IDCITY FROM tsilabtan_city WHERE NAMEOFCITY='".$divs->nodeValue."'
							") or die(mysql_error());
						while($hasilKomen  = mysql_fetch_array($queryKomen)){
							$IDCITY=$hasilKomen['IDCITY'];
						}
						//echo $divs->nodeValue."|".$IDPRODUCT."<BR />";
					break;
					case 4:
						$queryKomen = mysql_query("
						SELECT IDMEASUREUNIT FROM tsilabtan_measureunit WHERE IDMEASUREUNIT='".$divs->nodeValue."'
							") or die(mysql_error());
						while($hasilKomen  = mysql_fetch_array($queryKomen)){
							$IDMEASUREUNIT=$hasilKomen['IDMEASUREUNIT'];
						}
					
						//echo "Satuan: ".$divs->nodeValue."<BR />";
					break;
					case 5:
						$HARGAKEMARIN=$divs->nodeValue;
						//echo "Harga Kemarin: ".$divs->nodeValue."<BR />";
					break;
					case 6:
						$HARGASEKARANG=$divs->nodeValue;
						//echo "Harga Sekarang: ".$divs->nodeValue."<BR />";
					break;
					case 7:
						////echo "Perubahan(Rp): ".$divs->nodeValue."<BR />";
					break;
					case 8:
						
						////echo "Perubahan(%): ".$divs->nodeValue."<BR />";
					break;
				}
				if($a==8){
					if(strpos($produk,'Ayam') 
					|| strpos($produk,'Daging')
					|| strpos($produk,'Telur')
					
					){}else{

						
					
					mysql_query("INSERT INTO tsilabtan_titik_pantau_produsen VALUES('','".$IDPRODUCT."','".$IDMARKET."','".$IDCITY."','".$IDMEASUREUNIT."','".$HARGAKEMARIN."','".$HARGASEKARANG."','".$new_date."')");
					//echo "INSERT INTO tsilabtan_market_produsen VALUES('','".$IDPRODUCT."','".$IDMARKET."','".$IDCITY."','".$IDMEASUREUNIT."','".$HARGAKEMARIN."','".$HARGASEKARANG."','".$date."') <BR />";
					}
				}
				$a++;
			}
	
	}
}else{
		header('location:'.$base_url.'infoMarket_grab');
}
        header('location:'.$base_url.'infoMarket_grab');
}




$dom = new DOMDocument();
    @$dom->loadHTML($output);
    $tables = $dom->getElementsByTagName('tr');
    foreach($tables as $div) {
	
    if ($div->getElementsByTagName('td') ) {
		//foreach():
        //echo $div ->nodeValue."<BR />";
    }
	}
	
//header('location:infoMarket_grab.php');

//$parts = preg_split('/\s+/', $output);
 

//print_r($parts);
//curl_close($output);
//print($output);
 ?>