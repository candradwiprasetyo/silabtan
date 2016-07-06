<?php
	if(isset($_GET['IDPRODUCT'])){
		$sql=mysql_query("SELECT * FROM tsilabtan_product WHERE IDPRODUCT='".$_GET['IDPRODUCT']."'");
		$row=mysql_fetch_array($sql);
	}
?> 
<div class="pageheader">
	<h2><i class="fa fa-clock-o"></i> Form Market <span>Subtitle goes here...</span></h2>
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
			<form method="post" action="<?php if(!isset($_GET['IDPRODUCT'])){echo "proses_add_product.php";}else{echo "proses_edit_product.php";}?>" class="form-horizontal form-bordered" enctype="multipart/form-data">
				<div class="panel panel-primary">
					<div class="panel-body">
						<div class="form-group">
							<label class="col-sm-3 control-label">Type Of Product :</label>
							<div class="col-sm-5">
								<select name="IDTYPEOFPRODUCT" class="form-control chosen-select" data-placeholder="Pilih Kota...">
									<option name=""></option>
									<?php 
									$sql=mysql_query("SELECT * FROM tsilabtan_typeofproduct");
									while($row_city=mysql_fetch_array($sql)){
									?>
									<option <?php if(isset($_GET['IDPRODUCT'])){if($row['IDTYPEOFPRODUCT']==$row_city['IDTYPEOFPRODUCT']){echo "SELECTED";}}?> value="<?php echo $row_city['IDTYPEOFPRODUCT'];?>"><?php echo $row_city['TYPEOFPRODUCT'];?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Type Of Product :</label>
							<div class="col-sm-5">
								<select name="GOODORSERVICE" class="form-control chosen-select" data-placeholder="Pilih Jenis...">
									<option name=""></option>
									
									<option <?php if(isset($_GET['IDPRODUCT'])){if($row['GOODORSERVICE']=='Barang'){echo "SELECTED";}}?> value="<?php echo "Barang";?>"><?php echo "Barang";?></option>
									<option <?php if(isset($_GET['IDPRODUCT'])){if($row['GOODORSERVICE']=='Jasa'){echo "SELECTED";}}?> value="<?php echo "Jasa";?>"><?php echo "Jasa";?></option>
									
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Name Of Product:</label>
							<div class="col-sm-6">
								<input type="text" name="NAMEOFPRODUCT" placeholder="Name Of Product" class="form-control" <?php if(isset($_GET['IDPRODUCT'])){echo "value='".$row['NAMEOFPRODUCT']."'";}?>/>
								<input type="hidden" name="IDPRODUCT" value="<?php echo $_GET['IDPRODUCT']; ?>" />
							</div>
						</div>
					</div><!-- panel-body -->
					<div class="panel-footer">
						<center>
							<input type="submit" class="btn btn-primary" <?php if(isset($_GET['IDPRODUCT'])){echo 'value="Update"'; }else{echo 'value="Add"';} ?>></button>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo($base_url."tabel_product"); ?>" class="btn btn-default">Back</a>
						</center>
					</div><!-- panel-footer -->
				</div><!-- panel -->
			</form>
		</div>
	</div>
</div><!-- contentpanel -->