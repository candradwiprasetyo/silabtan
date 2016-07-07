<?php
	
		$sql=mysql_query("SELECT * FROM tsilabtan_user WHERE username='".$_SESSION['username']."'");
		$row=mysql_fetch_array($sql);
	
?> 
<div class="pageheader">
	<h2><i class="fa fa-clock-o"></i> Account Settings </h2>
	<div class="breadcrumb-wrapper">
		
	</div>
</div>
<form method="post" action="proses_account_settings.php"" class="form-horizontal form-bordered" enctype="multipart/form-data">
<div class="contentpanel">
	<div class="col-md-3">
		<div class="row">
			 <img src="<?= $row['PICTUREPROFILE'] ?>" class="thumbnail img-responsive" alt="" style="width:100%;" />
		</div>
		<input type="file" name="i_img"></input>
	</div>
	<div class="col-md-9">
		<div class="row">

			
				<div class="panel panel-primary">
					<div class="panel-body">
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama</label>
							<div class="col-sm-6">
								<input type="text" name="i_fullname" placeholder="Nama" class="form-control" value="<?= @$row['FULLNAME']; ?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">About</label>
							<div class="col-sm-6">
								
								<textarea class="form-control" name="i_about" rows="5"><?= @$row['about']?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Address</label>
							<div class="col-sm-6">
								<input type="text" name="i_address" placeholder="Address" class="form-control" value="<?= @$row['ADDRESS']; ?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Phone number</label>
							<div class="col-sm-6">
								<input type="text" name="i_phone_number" placeholder="Phone number" class="form-control" value="<?= @$row['CELLPHONENUMBER']; ?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Home Phone number</label>
							<div class="col-sm-6">
								<input type="text" name="i_home_phone_number" placeholder="Home Phone number" class="form-control" value="<?= @$row['HOMEPHONENUMBER']; ?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Office number</label>
							<div class="col-sm-6">
								<input type="text" name="i_office_phone_number" placeholder="Office Phone number" class="form-control" value="<?= @$row['OFFICEPHONENUMBER']; ?>" />
							</div>
						</div>
						<!--
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
						-->
						
					</div><!-- panel-body -->
					<div class="panel-footer">
						<center>
							<input type="submit" class="btn btn-primary" <?php if(isset($_GET['IDCITY'])){echo 'value="Update"'; }else{echo 'value="Save"';} ?>></button>
							
						</center>
					</div><!-- panel-footer -->
				</div><!-- panel -->
			
		</div>
	</div>
</div><!-- contentpanel -->
</form>
