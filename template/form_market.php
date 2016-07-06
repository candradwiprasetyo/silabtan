<?php
	
{
		$sql=mysql_query("SELECT * FROM tsilabtan_market WHERE IDMARKET='".$_GET['IDMARKET']."'");
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

			<form method="post" action="<?php if(!isset($_GET['IDMARKET'])){echo "proses_add_market.php";}else{echo "proses_edit_market.php";}?>" class="form-horizontal form-bordered" enctype="multipart/form-data">
				<div class="panel panel-primary">
					<div class="panel-body">
						<div class="form-group">
							<label class="col-sm-3 control-label">ID Pasar:</label>
								<div class="col-sm-6">
									<input type="text" name="IDMARKET" placeholder="ID Pasar" class="form-control" <?php if(isset($_GET['IDMARKET'])){echo "value='".$row['IDMARKET']."'";}?>/>
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama Pasar:</label>
							<div class="col-sm-6">
								<input type="text" name="NAMEOFMARKET" placeholder="Kode Pasar" class="form-control" <?php if(isset($_GET['IDMARKET'])){echo "value='".$row['NAMEOFMARKET']."'";}?> />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Kota :</label>
							<div class="col-sm-5">
								<select name="IDCITY" class="form-control chosen-select" data-placeholder="Pilih Kota...">
									<option name=""></option>
									<?php 
									$sql=mysql_query("SELECT * FROM tsilabtan_city");
									while($row_city=mysql_fetch_array($sql)){
									?>
									<option <?php if(isset($_GET['IDMARKET'])){if($row['IDCITY']==$row_city['IDCITY']){echo "SELECTED";}}?> value="<?php echo $row_city['IDCITY'];?>"><?php echo $row_city['NAMEOFCITY'];?></option>
									<?php
									}
									?>
									</select>
							</div>
						</div>
					</div><!-- panel-body -->
					<div class="panel-footer">
						<center>
							<input type="submit" class="btn btn-primary" <?php if(isset($_GET['IDMARKET'])){echo 'value="Update"'; }else{echo 'value="Add"';} ?>></button>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo($base_url."tabel_market"); ?>" class="btn btn-default">Back</a>
						</center>
					</div><!-- panel-footer -->
				</div><!-- panel -->
			</form>
		</div>
	</div>
</div><!-- contentpanel -->