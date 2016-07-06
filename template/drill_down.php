
<!DOCTYPE html>
<?php
	session_start();
	 if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
		header('location:signin.php'); //ke halaman index utama
    }
	include "koneksi.php";
	include "timeout_edit.php";
	$nama= $_SESSION['nama'];
	$email = $_SESSION['username'];
	
	$queryFoto = mysql_query("SELECT p.pictureprofile FROM tsilabtan_user p where p.username = '$email'")   ; 
	$hasilFoto = mysql_fetch_array($queryFoto);
	$numRowsFoto = mysql_num_rows($queryFoto);
	if($numRowsFoto > 0){
		$idAlamatFoto = $hasilFoto['pictureprofile'];
		//echo $idAlamatFoto;
	}
	
	/* print_r($_FILES);
	print_r($_POST); */

include('header.php');
?> 

  <div class="mainpanel">
    
    <div class="headerbar">
      
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
      <?php
      	$search = (isset($_GET['search'])) ? $_GET['search'] : "";
      	if($search==1){
      		$_SESSION['search'] = $_SESSION['search'];
      	}else{
      		unset($_SESSION['search']);
      	}
      ?>
      <form class="searchform" action="search.php?page=info_market" method="post">
        <input type="text" class="form-control" name="i_search" placeholder="Search here..." value="<?php if(isset($_SESSION['search'])){ echo $_SESSION['search']; }?>" />
      </form>
      
      <div class="header-right">
        <ul class="headermenu">
          
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="images/photos/loggeduser.png" alt="" />
                <?php echo $_SESSION['nama'];?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
              </ul>
            </div>
          </li>
          <li>
            <button id="chatview" class="btn btn-default tp-icon chat-icon">
                <i class="glyphicon glyphicon-comment"></i>
            </button>
          </li>
        </ul>
      </div><!-- header-right -->
      
    </div><!-- headerbar -->
        
    <div class="pageheader">
      <h2><i class="fa fa-clock-o"></i> Info Market <span>Subtitle goes here...</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="index.html">Bracket</a></li>
          <li><a href="index.html">Pages</a></li>
          <li class="active">Timeline</li>
        </ol>
      </div>
    </div>
				<div class="contentpanel">

					<div class="col-md-12">
						<?php 
						include 'index_drilldown.php';
						?>
					</div>

				</div><!-- contentpanel -->
			</div><!-- mainpanel -->

			<div class="rightpanel">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs nav-justified">
					<li class="active">
						<a href="#rp-alluser" data-toggle="tab"><i class="fa fa-users"></i></a>
					</li>
					<li>
						<a href="#rp-favorites" data-toggle="tab"><i class="fa fa-heart"></i></a>
					</li>
					<li>
						<a href="#rp-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a>
					</li>
					<li>
						<a href="#rp-settings" data-toggle="tab"><i class="fa fa-gear"></i></a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="rp-alluser">
						<h5 class="sidebartitle">Online Users</h5>
						<ul class="chatuserlist">
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/userprofile.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Eileen Sideways</strong>
										<small>Los Angeles, CA</small>
									</div>
								</div><!-- media -->
							</li>
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user1.png" class="media-object"> </a>
									<div class="media-body">
										<span class="pull-right badge badge-danger">2</span>
										<strong>Zaham Sindilmaca</strong>
										<small>San Francisco, CA</small>
									</div>
								</div><!-- media -->
							</li>
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user2.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Nusja Nawancali</strong>
										<small>Bangkok, Thailand</small>
									</div>
								</div><!-- media -->
							</li>
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user3.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Renov Leongal</strong>
										<small>Cebu City, Philippines</small>
									</div>
								</div><!-- media -->
							</li>
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user4.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Weno Carasbong</strong>
										<small>Tokyo, Japan</small>
									</div>
								</div><!-- media -->
							</li>
						</ul>

						<div class="mb30"></div>

						<h5 class="sidebartitle">Offline Users</h5>
						<ul class="chatuserlist">
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user5.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Eileen Sideways</strong>
										<small>Los Angeles, CA</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user2.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Zaham Sindilmaca</strong>
										<small>San Francisco, CA</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user3.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Nusja Nawancali</strong>
										<small>Bangkok, Thailand</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user4.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Renov Leongal</strong>
										<small>Cebu City, Philippines</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user5.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Weno Carasbong</strong>
										<small>Tokyo, Japan</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user4.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Renov Leongal</strong>
										<small>Cebu City, Philippines</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user5.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Weno Carasbong</strong>
										<small>Tokyo, Japan</small>
									</div>
								</div><!-- media -->
							</li>
						</ul>
					</div>
					<div class="tab-pane" id="rp-favorites">
						<h5 class="sidebartitle">Favorites</h5>
						<ul class="chatuserlist">
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user2.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Eileen Sideways</strong>
										<small>Los Angeles, CA</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user1.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Zaham Sindilmaca</strong>
										<small>San Francisco, CA</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user3.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Nusja Nawancali</strong>
										<small>Bangkok, Thailand</small>
									</div>
								</div><!-- media -->
							</li>
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user4.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Renov Leongal</strong>
										<small>Cebu City, Philippines</small>
									</div>
								</div><!-- media -->
							</li>
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user5.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Weno Carasbong</strong>
										<small>Tokyo, Japan</small>
									</div>
								</div><!-- media -->
							</li>
						</ul>
					</div>
					<div class="tab-pane" id="rp-history">
						<h5 class="sidebartitle">History</h5>
						<ul class="chatuserlist">
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user4.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Eileen Sideways</strong>
										<small>Hi hello, ctc?... would you mind if I go to your...</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user2.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Zaham Sindilmaca</strong>
										<small>This is to inform you that your product that we...</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user3.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Nusja Nawancali</strong>
										<small>Are you willing to have a long term relat...</small>
									</div>
								</div><!-- media -->
							</li>
						</ul>
					</div>
					<div class="tab-pane pane-settings" id="rp-settings">

						<h5 class="sidebartitle mb20">Settings</h5>
						<div class="form-group">
							<label class="col-xs-8 control-label">Show Offline Users</label>
							<div class="col-xs-4 control-label">
								<div class="toggle toggle-success"></div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-8 control-label">Enable History</label>
							<div class="col-xs-4 control-label">
								<div class="toggle toggle-success"></div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-8 control-label">Show Full Name</label>
							<div class="col-xs-4 control-label">
								<div class="toggle-chat1 toggle-success"></div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-8 control-label">Show Location</label>
							<div class="col-xs-4 control-label">
								<div class="toggle toggle-success"></div>
							</div>
						</div>

					</div><!-- tab-pane -->

				</div><!-- tab-content -->
			</div><!-- rightpanel -->

		</section>

		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/jquery-migrate-1.2.1.min.js"></script>
		<script src="js/jquery-ui-1.10.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/modernizr.min.js"></script>
		<script src="js/jquery.sparkline.min.js"></script>
		<script src="js/toggles.min.js"></script>
		<script src="js/retina.min.js"></script>
		<script src="js/jquery.cookies.js"></script>

		<script src="js/jquery.autogrow-textarea.js"></script>
		<script src="js/bootstrap-fileupload.min.js"></script>
		<script src="js/bootstrap-timepicker.min.js"></script>
		<script src="js/jquery.maskedinput.min.js"></script>
		<script src="js/jquery.tagsinput.min.js"></script>
		<script src="js/jquery.mousewheel.js"></script>
		<script src="js/chosen.jquery.min.js"></script>
		<script src="js/dropzone.min.js"></script>
		<script src="js/colorpicker.js"></script>

		<script src="js/custom.js"></script>
		<SCRIPT lang="javascript">
		function cek(){
				var jenis=document.getElementById("jenis").value;
				if(jenis=="konsumen"){
					document.getElementById("area").style.display='block';
					document.getElementById("pasar").style.display='block';
				}else{
					document.getElementById("area").style.display='none';
					document.getElementById("pasar").style.display='none';
				}
			}
		</SCRIPT>
		<script>
			
			
			jQuery(document).ready(function()
			{

				// Chosen Select
				jQuery(".chosen-select").chosen(
				{
					'width' : '100%',
					'white-space' : 'nowrap'
				});

				// Tags Input
				jQuery('#tags').tagsInput(
				{
					width : 'auto'
				});

				// Textarea Autogrow
				jQuery('#autoResizeTA').autogrow();

				// Color Picker
				if (jQuery('#colorpicker').length > 0)
				{
					jQuery('#colorSelector').ColorPicker(
					{
						onShow : function(colpkr)
						{
							jQuery(colpkr).fadeIn(500);
							return false;
						},
						onHide : function(colpkr)
						{
							jQuery(colpkr).fadeOut(500);
							return false;
						},
						onChange : function(hsb, hex, rgb)
						{
							jQuery('#colorSelector span').css('backgroundColor', '#' + hex);
							jQuery('#colorpicker').val('#' + hex);
						}
					});
				}

				// Color Picker Flat Mode
				jQuery('#colorpickerholder').ColorPicker(
				{
					flat : true,
					onChange : function(hsb, hex, rgb)
					{
						jQuery('#colorpicker3').val('#' + hex);
					}
				});

				// Date Picker
				jQuery('#datepicker').datepicker(
		{
			dateFormat: "yy-mm-dd"
			// altFormat: "dd-mm-yy"
		}
	);

				jQuery('#datepicker-inline').datepicker();

				jQuery('#datepicker-multiple').datepicker(
				{
					numberOfMonths : 3,
					showButtonPanel : true
				});
				

				// Spinner
				var spinner = jQuery('#spinner').spinner();
				spinner.spinner('value', 0);

				// Input Masks
				jQuery("#date").mask("9999-99-99");
				jQuery("#phone").mask("(999) 999-9999");
				jQuery("#ssn").mask("999-99-9999");

				// Time Picker
				jQuery('#timepicker').timepicker(
				{
					defaultTIme : false
				});
				jQuery('#timepicker2').timepicker(
				{
					showMeridian : false
				});
				jQuery('#timepicker3').timepicker(
				{
					minuteStep : 15
				});

			});
		</script>

	</body>
</html>
