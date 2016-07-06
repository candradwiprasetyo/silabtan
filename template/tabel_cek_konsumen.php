<?php
$d = explode("-", $date);
$new_date = $d[2]."-".$d[1]."-".$d[0];
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, array('tanggal'=>$new_date, 'area'=>$codecity, 'pasar'=>$pasar));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
?>
<center><h3>Harga <?php echo $nameofmarket; ?> di Tingkat Konsumen Tanggal <?php echo date('Y-m-d H:i:s'); ?></h3></center>

<div class="table-responsive">
            <table class="table table-new" id="table1">
              <thead>
						<tr font size="5px">
							<!--<th style="text-align: center">No</th>-->
							<th style="text-align: center">Nama Bahan Pokok</th>
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
					$IDMEASUREUNIT=$divs->nodeValue;
					break;
					case 3:
					$HARGAKEMARIN=$divs->nodeValue;
					break;
					case 4:
					$HARGASEKARANG=$divs->nodeValue;
					break;
					case 5:
					$PERUBAHANRP=$divs->nodeValue;
					break;
					case 6:
					$PERUBAHANPERSEN=$divs->nodeValue;
					break;
				}
				if($a==6){
					if(strpos($IDPRODUCT,'Semen') || strpos($IDPRODUCT,'SEMEN') 
					|| strpos($IDPRODUCT,'Daging') 
					|| strpos($IDPRODUCT,'DAGING') 
					|| strpos($IDPRODUCT,'Telur') 
					|| strpos($IDPRODUCT,'TELUR') 
					|| strpos($IDPRODUCT,'MINYAK') 
					|| strpos($IDPRODUCT,'Minyak') 
					|| strpos($IDPRODUCT,'MIE') 
					|| strpos($IDPRODUCT,'cm') 
					|| strpos($IDPRODUCT,'Cm') 
					|| strpos($IDPRODUCT,'mm') 
					|| strpos($IDPRODUCT,'MM') 
					|| strpos($IDPRODUCT,'KAYU') 
					|| strpos($IDPRODUCT,'BESI') 
					|| strpos($IDPRODUCT,'PAKU') 
					|| strpos($IDPRODUCT,'GAS') 
					|| strpos($IDPRODUCT,'mie') 
					|| strpos($IDPRODUCT,'Bimoli') 
					|| strpos($IDPRODUCT,'Curah') 
					|| strpos($IDPRODUCT,'GARAM') 
					|| strpos($IDPRODUCT,'Bata') 
					|| strpos($IDPRODUCT,'Halus') 
					|| strpos($IDPRODUCT,'Susu') 
					|| strpos($IDPRODUCT,'SUSU') 
					|| strpos($IDPRODUCT,'Kental Manis') 
					|| strpos($IDPRODUCT,'ikan') 
					|| strpos($IDPRODUCT,'Ikan') 
					|| strpos($IDPRODUCT,'IKAN')){}else{
					?>
								<!--<td align="left"><?php echo $NO; ?></td>-->
								<td align="left"><?php echo $IDPRODUCT; ?></td>
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