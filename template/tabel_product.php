<div class="pageheader">
	<h2><i class="fa fa-table"></i> Data Product <span>Subtitle goes here...</span></h2>
	<div class="breadcrumb-wrapper">
		<span class="label">You are here:</span>
		<ol class="breadcrumb">
			<li>
				<a href="infoumum.php">Silabtan</a>
			</li>
			<li>
				<a href="index.html">Pages</a>
			</li>
			<li class="active">
				Data Product
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
						<a href="<?php echo($base_url."form_product"); ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah </a>

					</div>
					<div class="table-responsive">
						<table class="table table-new" id="table2">
							<thead>
								<tr font size="5px">
									<th style="text-align: center">No</th>
									<th style="text-align: center">Type Of Product</th>
									<th style="text-align: center">Product</th>
									<th style="text-align: center">Good Or Service</th>
									<th style="text-align: center"></th>
								</tr>
							</thead>
							<tbody>

<?php
	$sql=mysql_query("SELECT a.IDPRODUCT, b.TYPEOFPRODUCT, a.NAMEOFPRODUCT, a.GOODORSERVICE FROM tsilabtan_product a INNER JOIN tsilabtan_typeofproduct b ON a.IDTYPEOFPRODUCT=b.IDTYPEOFPRODUCT
	");
	$u=0;
    WHILE($row=mysql_fetch_array($sql)) {
		$u++;
	?>
	<tr class="odd gradeX">
								<td align="right"><?php echo $u; ?></td>
								<td align="left"><?php echo $row['TYPEOFPRODUCT']; ?></td>
								<td align="left"><?php echo $row['NAMEOFPRODUCT']; ?></td>
								<td align="left"><?php echo $row['GOODORSERVICE']; ?></td>
								<td align="center"><center><a href="<?php echo($base_url."form_product&IDPRODUCT=".$row['IDPRODUCT']); ?>" class="btn btn-primary" href=""><i class="fa fa-edit"></i></a>&nbsp;<a href="proses_hapus_product.php?IDPRODUCT=<?php echo $row['IDPRODUCT'];?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a></center></td>
											
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