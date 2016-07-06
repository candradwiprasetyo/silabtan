<?php
	if(isset($_GET['IDTYPEOFPRODUCT']))
	{
		$sql=mysql_query("SELECT * FROM tsilabtan_typeofproduct WHERE IDTYPEOFPRODUCT='".$_GET['IDTYPEOFPRODUCT']."'");
		$row=mysql_fetch_array($sql);
	}
?> 
<div class="pageheader">
	<h2><i class="fa fa-clock-o"></i> Form Type Of Market <span>Subtitle goes here...</span></h2>
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
			<form method="post" action="<?php if(!isset($_GET['IDTYPEOFPRODUCT'])){echo "proses_add_typeproduct.php";}else{echo "proses_edit_typeproduct.php";}?>" class="form-horizontal form-bordered" enctype="multipart/form-data">
				<div class="panel panel-primary">
					<div class="panel-body">
						<div class="form-group">
							<label class="col-sm-3 control-label">Type Of Product:</label>
							<div class="col-sm-6">
								<input type="text" name="TYPEOFPRODUCT" placeholder="Type Of Product" class="form-control" <?php if(isset($_GET['IDTYPEOFPRODUCT'])){echo "value='".$row['TYPEOFPRODUCT']."'";}?>/>
								<input type="hidden" name="IDTYPEOFPRODUCT" value="<?php echo $_GET['IDTYPEOFPRODUCT']; ?>" />
							</div>
						</div>
						
						
					</div><!-- panel-body -->
					<div class="panel-footer">
						<center>
							<input type="submit" class="btn btn-primary" <?php if(isset($_GET['IDTYPEOFPRODUCT'])){echo 'value="Update"'; }else{echo 'value="Add"';} ?>></button>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo($base_url."tabel_typeproduct"); ?>" class="btn btn-default">Back</a>
						</center>
					</div><!-- panel-footer -->
				</div><!-- panel -->
			</form>
		</div>
	</div>
</div><!-- contentpanel -->
