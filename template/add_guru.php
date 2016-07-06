<?php
if(isset($_GET['id_guru'])){
$id_guru=$_GET['id_guru'];
$edit_guru=mysql_query("SELECT * FROM tguru WHERE id_guru='".$id_guru."'");
$row_edit_guru=mysql_fetch_array($edit_guru);
$foto=$row_edit_guru['foto'];
$nama=$row_edit_guru['nama_guru'];
$no_induk=$row_edit_guru['no_induk'];
$jenis_kelamin=$row_edit_guru['jenis_kelamin'];
$email=$row_edit_guru['email'];
$alamat=$row_edit_guru['alamat'];
$no_telp=$row_edit_guru['no_telp'];
$agama=$row_edit_guru['agama'];
$tempat_lahir=$row_edit_guru['tempat_lahir'];
$tanggal_lahir=$row_edit_guru['tanggal_lahir'];
}
?>
    	<div class="pageheader">
      <h2><i><img src="images/Boss.png"></img></i> Data Guru <span>Sistem Informasi Penjadwalan</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="index.php">SIP</a></li>
          <li><a href="index.php?hal=form_guru">Data Guru</a></li>
		  <li class="active">Tambah Guru</li>
        </ol>
      </div>
    </div>
	<div class="contentpanel">
	  <div class="row">
	  <div class="col-md-12">
	  &nbsp
	  </div>
	  </div>
	  <div class="row">
	  <div class="col-md-12">
			<div class="col-sm-12">
				<form method="post" action="<?php if(isset($_GET['id_guru'])){echo 'proses_update_guru.php?id_guru='.$_GET['id_guru'].'';}else{echo 'proses_add_guru.php';} ?>" class="form-horizontal form-bordered" enctype="multipart/form-data">
				<div class="panel panel-dark">
				<div class="panel-heading">
					<div class="panel-btns">
					<!--<a href="" class="panel-close">&times;</a>
					<a href="" class="minimize">&minus;</a>
					-->
					</div><!-- panel-btns -->
					<h2 class="panel-title"><i class="fa fa-file-text-o"></i>&nbsp;&nbsp; Tambah Guru</h2>
				</div>
					<div class="panel-body">
						<div class="form-group">
									<label class="col-sm-3 control-label">Foto :</label>
									<div class="col-sm-6">
										<img width="90" height="70" id="blah" class="thumbnail img-responsive" src="images/photos/foto_guru/<?php if(isset($_GET['id_guru'])){if($foto==''){echo 'avatar.jpg';}else{echo ''.$foto.'';}}else{echo 'avatar.jpg';} ?>" />
										<div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="input-append">
												<div class="uneditable-input">
													<i class="glyphicon glyphicon-file fileupload-exists"></i>
													<span class="fileupload-preview"></span>
												</div>
												<span class="btn btn-default btn-file"> <span class="fileupload-new">Select file</span> <span class="fileupload-exists">Change</span>
													<input type="file" name="foto" <?php if(isset($_GET['id_guru'])){echo 'value="'.$foto.'"'; } ?> onchange="readURL(this);" />
												</span>
												<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
											</div>
										</div>
									</div>
						</div>
						<div class="form-group">
									<label class="col-sm-3 control-label">Nama :</label>
									<div class="col-sm-6">
										<input type="text" name="nama" <?php if(isset($_GET['id_guru'])){echo 'value="'.$nama.'"'; } ?> placeholder="Nama" class="form-control" />
									</div>
						</div>
						<div class="form-group">
									<label class="col-sm-3 control-label">No Induk :</label>
									<div class="col-sm-6">
										<input type="text" name="no_induk" <?php if(isset($_GET['id_guru'])){echo 'value="'.$no_induk.'" id="disabledinput" disabled=""'; } ?> placeholder="No Induk" class="form-control" />
									</div>
						</div>
						<div class="form-group">
									<label class="col-sm-3 control-label">Jenis Kelamin :</label>
									<div class="col-sm-6">
										<div class="rdio rdio-primary">
										<input type="radio" <?php if(isset($_GET['id_guru'])){if($jenis_kelamin=="Pria"){echo "checked='checked'";}}else{echo "checked='checked'";}?> id="male" name="jenis_kelamin" value="Pria">
										<label for="male">Pria</label>
										</div>
										<div class="rdio rdio-primary">
										<input type="radio" <?php if(isset($_GET['id_guru'])){if($jenis_kelamin=="Wanita"){echo "checked='checked'";}}?> id="female" name="jenis_kelamin" value="Wanita">
										<label for="female">Wanita</label>
										</div>
									</div>
						</div>
						<div class="form-group">
									<div class="form-group">
									<label class="col-sm-3 control-label">Agama :</label>
									<div class="col-sm-5">
										<select name="agama" class="form-control chosen-select" data-placeholder="Pilih Agama...">
											<option name=""></option>
											<option <?php if(isset($_GET['id_guru'])){ if($agama=="Islam"){echo "selected";}}?> value="Islam">Islam</option>
											<option <?php if(isset($_GET['id_guru'])){ if($agama=="Kristen"){echo "selected";}}?> value="Kristen">Kristen</option>
											<option <?php if(isset($_GET['id_guru'])){ if($agama=="Katolik"){echo "selected";}}?> value="Katolik">Katolik</option>
											<option <?php if(isset($_GET['id_guru'])){ if($agama=="Budha"){echo "selected";}}?> value="Budha">Budha</option>
											<option <?php if(isset($_GET['id_guru'])){ if($agama=="Konghucu"){echo "selected";}}?> value="Konghucu">Konghucu</option>
											<option <?php if(isset($_GET['id_guru'])){ if($agama=="Hindu"){echo "selected";}}?> value="Hindu">Hindu</option>
											<option <?php if(isset($_GET['id_guru'])){ if($agama=="Lain-lain"){echo "selected";}}?> value="Lain-lain">Lain-lain</option>
										</select>
									</div>
									</div>
						</div>
						<div class="form-group">
									<label class="col-sm-3 control-label">Alamat :</label>
									<div class="col-sm-7">
										<textarea id="autoResizeTA" name="alamat" class="form-control" rows="5" <?php if(isset($_GET['id_guru'])){echo 'placeholder="'.$alamat.'"'; } ?>></textarea>
									</div>
						</div>
						<div class="form-group">
									<label class="col-sm-3 control-label">Tempat Lahir :</label>
									<div class="col-sm-6">
										<input type="text" name="tempat_lahir" placeholder="Tempat Lahir" <?php if(isset($_GET['id_guru'])){echo 'value="'.$tempat_lahir.'"'; } ?> class="form-control" />
									</div>
						</div>
						<div class="form-group">
									<label class="col-sm-3 control-label">Tanggal Lahir :</label>
									<div class="input-group mb15 col-sm-6">
										<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
										<input type="text" name="tanggal_lahir" placeholder="Tanggal DD/MM/YYYY" <?php if(isset($_GET['id_guru'])){echo 'value="'.$tanggal_lahir.'"'; } ?> id="date" class="form-control" />
									</div>
						</div>
						<div class="form-group">
									<label class="col-sm-3 control-label">Email :</label>
									<div class="col-sm-6">
										<input type="text" name="email" placeholder="Email" <?php if(isset($_GET['id_guru'])){echo 'value="'.$email.'"'; } ?> class="form-control" />
									</div>
						</div>
						<div class="form-group">
									<label class="col-sm-3 control-label">No Telp :</label>
									<div class="col-sm-6">
										<input type="text" name="no_telp" placeholder="No Telpon" <?php if(isset($_GET['id_guru'])){echo 'value="'.$no_telp.'"'; } ?> class="form-control" />
									</div>
						</div>
					</div>
					<div class="panel-footer">
					<center>
						<input type="submit" class="btn btn-primary" <?php if(isset($_GET['id_guru'])){echo 'value="Update"'; }else{echo 'value="Add"';} ?>></button>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?hal=form_guru" class="btn btn-default">Back</a>
					</center>
					</div><!-- panel-footer -->
				</div><!-- panel -->
				</form><!-- form -->
			</div><!-- col-sm-6 -->
	  </div>
	  </div>
    </div><!-- contentpanel -->
	<script type="text/javascript">
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)

            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>