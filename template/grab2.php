<?php
include "koneksi.php";
$IDPRODUCT='';
$IDMARKET='';
$IDCITY='';
$IDMEASUREUNIT='';
$url = 'http://siskaperbapo.com/harga/tabel.nodesign/';
$date = '2016-05-23';
//$date = date('Y-m-d');
$ch = curl_init();
 
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, array('kabkota'=>'kedirikab', 'tanggal'=>'2016-05-23', 'pasar'=>'50'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);

echo $output;
/*	$dom = new DOMDocument();
    @$dom->loadHTML($output);
    $tables = $dom->getElementsByTagName('tr');
    foreach($tables as $div) {
		$tds = $div->getElementsByTagName('td');
			$a=0;
			foreach($tds as $divs) {
				
				switch($a){
					case 0:
						echo "No: ".$divs->nodeValue."<BR />";
					break;
					case 1:
						$queryKomen = mysql_query("
						SELECT IDPRODUCT FROM tsilabtan_product WHERE TYPEOFPRODUCT='".$divs->nodeValue."'
							") or die(mysql_error());
						while($hasilKomen  = mysql_fetch_array($queryKomen)){
							$IDPRODUCT=$hasilKomen['IDPRODUCT'];
						}
						
						echo "Nama Bahan Pokok: ".$divs->nodeValue."<BR />";
					break;
					case 2:
						$queryKomen = mysql_query("
						SELECT IDMARKET FROM tsilabtan_market WHERE NAMEOFMARKET='".$divs->nodeValue."'
							") or die(mysql_error());
						while($hasilKomen  = mysql_fetch_array($queryKomen)){
							$IDMARKET=$hasilKomen['IDMARKET'];
						}
						
						echo "Titik Pantau: ".$divs->nodeValue."<BR />";
					break;
					case 3:
						$queryKomen = mysql_query("
						SELECT IDCITY FROM tsilabtan_city WHERE NAMEOFCITY='".$divs->nodeValue."'
							") or die(mysql_error());
						while($hasilKomen  = mysql_fetch_array($queryKomen)){
							$IDCITY=$hasilKomen['IDCITY'];
						}
						
						echo "Kabupaten: ".$divs->nodeValue."<BR />";
					break;
					case 4:
						$queryKomen = mysql_query("
						SELECT IDMEASUREUNIT FROM tsilabtan_measureunit WHERE IDMEASUREUNIT='".$divs->nodeValue."'
							") or die(mysql_error());
						while($hasilKomen  = mysql_fetch_array($queryKomen)){
							$IDMEASUREUNIT=$hasilKomen['IDMEASUREUNIT'];
						}
					
						echo "Satuan: ".$divs->nodeValue."<BR />";
					break;
					case 5:
						$HARGAKEMARIN=$divs->nodeValue;
						echo "Harga Kemarin: ".$divs->nodeValue."<BR />";
					break;
					case 6:
						$HARGASEKARANG=$divs->nodeValue;
						echo "Harga Sekarang: ".$divs->nodeValue."<BR />";
					break;
					case 7:
						echo "Perubahan(Rp): ".$divs->nodeValue."<BR />";
					break;
					case 8:
						
						echo "Perubahan(%): ".$divs->nodeValue."<BR />";
					break;
				}
				if($a==8){
					mysql_query("INSERT INTO tsilabtan_market_produsen VALUES('','".$IDPRODUCT."','".$IDMARKET."','".$IDCITY."','".$IDMEASUREUNIT."','".$HARGAKEMARIN."','".$HARGASEKARANG."','".$date."')");
					//echo "INSERT INTO tsilabtan_market_produsen VALUES('','".$IDPRODUCT."','".$IDMARKET."','".$IDCITY."','".$IDMEASUREUNIT."','".$HARGAKEMARIN."','".$HARGASEKARANG."','".$date."')";
				}
				$a++;
			}
		echo "<BR />";
	}


$dom = new DOMDocument();
    @$dom->loadHTML($output);
    $tables = $dom->getElementsByTagName('tr');
    foreach($tables as $div) {
	
    if ($div->getElementsByTagName('td') ) {
		//foreach():
        echo $div ->nodeValue."<BR />";
    }
	}
	


//$parts = preg_split('/\s+/', $output);
 

//print_r($parts);
//curl_close($output);
//print($output);
*/
 ?>