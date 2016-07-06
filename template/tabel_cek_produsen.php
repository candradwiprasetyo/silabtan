<?php
$d = explode("-", $date);
$new_date = $d[2]."-".$d[1]."-".$d[0];
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, array('tanggal'=>$new_date));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
?>

<div class="table-responsive">
            <table class="table table-new" id="table1">
              <thead>
						<tr font size="5px">
							<th style="text-align: center">Nama Bahan Pokok</th>
							<th style="text-align: center">Titik Pantau</th>
							<th style="text-align: center">Kabupaten</th>
							<th style="text-align: center">Satuan</th>
							<th style="text-align: center">Harga Kemarin</th>
							<th style="text-align: center">Harga Sekarang</th>
							<th style="text-align: center">Perubahan(Rp)</th>
							<th style="text-align: center">Perubahan(%)</th>
						</tr>
					</thead>
					<tbody>
<?php

	$dom = new DOMDocument();
    @$dom->loadHTML($output);
    $tables = $dom->getElementsByTagName('tr');
    foreach($tables as $div) {
	?>
	<tr class="odd gradeX">
	<?php
		$tds = $div->getElementsByTagName('td');
			$a=0;
			foreach($tds as $divs) {
				
				
				switch($a){
					case 0:
					$NO=$divs->nodeValue;
					break;
					case 1:		
					$IDPRODUCT=$divs->nodeValue;
					break;
					case 2:
					$IDMARKET=$divs->nodeValue;
					break;
					case 3:
					$IDCITY=$divs->nodeValue;
					break;
					case 4:
					$IDMEASUREUNIT=$divs->nodeValue;
					break;
					case 5:
					$HARGAKEMARIN=$divs->nodeValue;
					break;
					case 6:
					$HARGASEKARANG=$divs->nodeValue;
					break;
					case 7:
					$PERUBAHANRP=$divs->nodeValue;
					break;
					case 8:
					$PERUBAHANPERSEN=$divs->nodeValue;
					break;
				}
				if($a==8){
					if(strpos($IDPRODUCT,'Ayam') 
					|| strpos($IDPRODUCT,'Daging')
					|| strpos($IDPRODUCT,'Telur')
					
					){}else{
					?>
								<td align="center"><?php echo $IDPRODUCT; ?></td>
								<td align="center"><?php echo $IDMARKET; ?></td>
								<td align="center"><?php echo $IDCITY; ?></td>
								<td align="center"><?php echo $IDMEASUREUNIT; ?></td>
								<td align="center"><?php echo $HARGAKEMARIN; ?></td>	
								<td align="center"><?php echo $HARGASEKARANG; ?> </td>
								<td align="center"><?php echo $PERUBAHANRP; ?> </td>
								<td align="center"><?php echo $PERUBAHANPERSEN; ?> </td>
					<?php
					}
				}
				$a++;
			}
	}?>
	
								
							</tr>
						<?php
						//}
						?>
					</tbody>
           </table>
          </div><!-- table-responsive -->

          <script src="js/jquery.datatables.min.js"></script>