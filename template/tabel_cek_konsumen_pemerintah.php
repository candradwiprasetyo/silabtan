
<center><h3>Harga <?php echo $nameofmarket; ?> di Tingkat Konsumen Tanggal <?php echo $date; ?></h3></center>

<div class="table-responsive">
            <table class="table table-new" id="table1">
              <thead>
						<tr font size="5px">
							<!--<th style="text-align: center">No</th>-->
							<th style="text-align: center">Type Bahan Pokok</th>
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
$d = explode("-", $date);
$new_date = $d[2]."-".$d[1]."-".$d[0];
	$sql=mysql_query("SELECT d.NAMEOFMARKET, b.NAMEOFPRODUCT, b.TYPEOFPRODUCT, c.NAMEOFCITY, a.IDMEASUREUNIT, a.HARGAKEMARIN, a.HARGASEKARANG, a.tanggal FROM 
	tsilabtan_titik_pantau_konsumen a INNER JOIN tsilabtan_product b 
	ON a.IDPRODUCT=b.IDPRODUCT
	INNER JOIN tsilabtan_city c ON a.IDCITY=c.CODECITY
	INNER JOIN tsilabtan_market d ON a.IDMARKET=d.IDMARKET
	WHERE a.tanggal='".$new_date."'
	AND c.IDCITY='".$area."'
	AND d.IDMARKET='".$pasar."'
	");
    while($row=mysql_fetch_array($sql)){
	?>
	<tr class="odd gradeX">

								<td align="left"><?php echo $row['TYPEOFPRODUCT']; ?></td>
								<td align="center"><?php echo $row['NAMEOFPRODUCT']; ?></td>
								<td align="center"><?php echo $row['IDMEASUREUNIT']; ?></td>
								<td align="center"><?php echo $row['HARGAKEMARIN']; ?></td>	
								<td align="center"><?php echo $row['HARGASEKARANG']; ?> </td>
								<td align="center"><?php ?> </td>
								<td align="center"><?php ?> </td>
					
	
								
							</tr>
						<?php
						}
						?>
					</tbody>
           </table>
          </div><!-- table-responsive -->

          <script src="js/jquery.datatables.min.js"></script>