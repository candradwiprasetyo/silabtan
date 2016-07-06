
<div class="pageheader">
	<h2><i class="fa fa-clock-o"></i> Info Market <span>Subtitle goes here...</span></h2>
	<div class="breadcrumb-wrapper">
		<span class="label">You are here:</span>
		<ol class="breadcrumb">
			<li>
				<a href="index.html">Bracket</a>
			</li>
			<li>
				<a href="index.html">Pages</a>
			</li>
			<li class="active">
				Timeline
			</li>
		</ol>
	</div>
</div>
<div class="contentpanel">

	<div class="col-md-12">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body">

					<div style="margin-bottom: 20px;">
						<a href="<?php echo($base_url."form_market"); ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Order</a>

					</div>
					<div class="table-responsive">
						<table class="table table-new" id="table2">
							<thead>
								<tr font size="5px">
									<th style="text-align: center">ID Pasar</th>
									<th style="text-align: center">Nama Pasar</th>
									<th style="text-align: center">ID Kota</th>
									<th style="text-align: center"></th>
								</tr>
							</thead>
							<tbody>

<?php
	$sql=mysql_query("SELECT a.IDMARKET,a.NAMEOFMARKET,b.NAMEOFCITY FROM tsilabtan_market a INNER JOIN tsilabtan_city b ON a.IDCITY = b.IDCITY
	");
    WHILE($row=mysql_fetch_array($sql)) {
	?>
	<tr class="odd gradeX">
								<td align="right"><?php echo $row['IDMARKET']; ?></td>
								<td align="left"><?php echo $row['NAMEOFMARKET']; ?></td>
								<td align="left"><?php echo $row['NAMEOFCITY']; ?></td>
								<td align="center"><center><a href="<?php echo($base_url."form_market&IDMARKET=".$row['IDMARKET']); ?>" class="btn btn-primary" href=""><i class="fa fa-edit"></i></a>&nbsp;<a href="proses_hapus_market.php?IDMARKET=<?php echo $row['IDMARKET'];?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a></center></td>
											
							</tr>
						<?php
						}
						?>
							</tbody>
						</table>
					</div><!-- table-responsive -->
				</div><!-- panel-body -->
			</div><!-- panel -->
		</div>
	</div>

</div><!-- contentpanel -->
<script lang="javascript">
	function cek()
	{
		var jenis = document.getElementById("jenis").value;
		if (jenis == "konsumen")
		{
			document.getElementById("area").style.display = 'block';
			document.getElementById("pasar").style.display = 'block';
		}
		else
		{
			document.getElementById("area").style.display = 'none';
			document.getElementById("pasar").style.display = 'none';
		}
	}
</script>
<script src="js/jquery.datatables.min.js"></script>
<script src="js/table-new-create.js"></script>