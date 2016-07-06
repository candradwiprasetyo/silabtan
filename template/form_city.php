<?php
	if(isset($_GET['IDCITY']))
	{
		$sql=mysql_query("SELECT * FROM tsilabtan_city WHERE IDCITY='".$_GET['IDCITY']."'");
		$row=mysql_fetch_array($sql);
	}
?> 
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

			<form method="post" action="<?php if(!isset($_GET['IDCITY'])){echo "proses_add_city.php";}else{echo "proses_edit_city.php";}?>" class="form-horizontal form-bordered" enctype="multipart/form-data">
				<div class="panel panel-primary">
					<div class="panel-body">
						<div class="form-group">
							<label class="col-sm-3 control-label">ID Kota:</label>
							<div class="col-sm-6">
								<input type="text" name="IDCITY" placeholder="ID Kota" class="form-control" <?php if(isset($_GET['IDCITY'])){echo "value='".$row['IDCITY']."'";}?>/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Provinsi :</label>
							<div class="col-sm-5">
								<select name="IDPROVINCE" class="form-control chosen-select" data-placeholder="Pilih Provinsi...">
									<option name=""></option>
									<?php 
									$sql=mysql_query("SELECT * FROM tsilabtan_province");
									while($row_province=mysql_fetch_array($sql)){
									?>
									<option <?php if(isset($_GET['IDCITY'])){if($row['IDPROVINCE']==$row_province['IDPROVINCE']){echo "SELECTED";}}?> value="<?php echo $row_province['IDPROVINCE'];?>"><?php echo $row_province['NAMEOFPROVINCE'];?></option>
									<?php
									}
									?>
									</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Kode Kota:</label>
							<div class="col-sm-6">
								<input type="text" name="CODECITY" placeholder="Kode Kota" class="form-control" <?php if(isset($_GET['IDCITY'])){echo "value='".$row['CODECITY']."'";}?> />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama Kota:</label>
							<div class="col-sm-6">
								<input type="text" name="NAMEOFCITY" placeholder="Nama Kota" class="form-control" <?php if(isset($_GET['IDCITY'])){echo "value='".$row['NAMEOFCITY']."'";}?> />
							</div>
						</div>
					</div><!-- panel-body -->
					<div class="panel-footer">
						<center>
							<input type="submit" class="btn btn-primary" <?php if(isset($_GET['IDCITY'])){echo 'value="Update"'; }else{echo 'value="Add"';} ?>></button>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo($base_url."tabel_city"); ?>" class="btn btn-default">Back</a>
						</center>
					</div><!-- panel-footer -->
				</div><!-- panel -->
			</form>
		</div>
	</div>
</div><!-- contentpanel -->
