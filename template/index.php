<?php
session_start();
	include ("koneksi.php");
	include ("session.php");
	
	include "timeout_edit.php";
	$nama = $_SESSION['nama'];
	$email = $_SESSION['username'];
	
	$queryFoto = mysql_query("SELECT p.pictureprofile FROM tsilabtan_user p where p.username = '$email'");
	$hasilFoto = mysql_fetch_array($queryFoto);
	$numRowsFoto = mysql_num_rows($queryFoto);
	if ($numRowsFoto > 0)
	{
		$idAlamatFoto = $hasilFoto['pictureprofile'];
		//echo $idAlamatFoto;
	}
	
	/* print_r($_FILES);
	 print_r($_POST); */
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="images/favicon.png" type="image/png">

		<title>SILABTAN UPN "VETERAN" JATIM</title>

		<link rel="stylesheet" href="css/bootstrap-fileupload.min.css" />
		<link rel="stylesheet" href="css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="css/jquery.tagsinput.css" />
		<link rel="stylesheet" href="css/colorpicker.css" />
		<link rel="stylesheet" href="css/dropzone.css" />

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>

		<![endif]-->
		<link href="css/style.default.css" rel="stylesheet">
		<link href="css/jquery.datatables.css" rel="stylesheet">
		<link href="css/form-new-create.css" rel="stylesheet">
		<link href="css/form-new-create-2.css" rel="stylesheet">
		<link href="css/table-new-create.css" rel="stylesheet">

		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/jquery-migrate-1.2.1.min.js"></script>
		<script src="js/jquery-ui-1.10.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/modernizr.min.js"></script>
		<script src="js/jquery.sparkline.min.js"></script>
		<script src="js/toggles.min.js"></script>
		<script src="js/retina.min.js"></script>
		<script src="js/jquery.cookies.js"></script>

		<!-- javascript table -->
		<!-- <script src="js/table-new-create.js"></script> -->
		<!-- javascript table -->

		<!-- javascript datepicker -->
		<script src="js/jquery.autogrow-textarea.js"></script>
		<script src="js/bootstrap-fileupload.min.js"></script>
		<script src="js/bootstrap-timepicker.min.js"></script>
		<script src="js/jquery.maskedinput.min.js"></script>
		<script src="js/jquery.tagsinput.min.js"></script>
		<script src="js/jquery.mousewheel.js"></script>
		<!--<script src="js/chosen.jquery.min.js"></script>-->
		<script src="js/dropzone.min.js"></script>
		<script src="js/colorpicker.js"></script>
		<script src="js/datepicker-new-create.js"></script>
		<!-- javascript datepicker -->

		<!-- <script src="js/flot/flot.min.js"></script>
		<script src="js/flot/flot.resize.min.js"></script>
		<script src="js/morris.min.js"></script>
		<script src="js/raphael-2.1.0.min.js"></script> -->

		
		<script src="js/chosen.jquery.min.js"></script>
		<!--<script src="js/jquery.datatables.min.js"></script>-->
		<script src="js/custom.js"></script>
		<!--<script src="js/tagcanvas.min.js" type="text/javascript"></script>
		 <script src="js/dashboard.js"></script> -->
		
		 
		<script src="js/jquery.validate.min.js"></script>
		<!--<script src="js/form-new-create.js"></script>
		<script src="js/table-new-create.js"></script>-->
		
		<!-- javascript form -->
		<!-- <style>
			.headermenu > li
			{
				border-left: none;
			}
			ul.nav.nav-pills.nav-stacked.nav-bracket > li.nav-parent > ul.children > li:hover
			{
				background:#FFFFFF;
			}
			.menutoggle .fa, .menutoggle .glyphicon
			{
				margin:25px 0 0 15px;
			}
			.leftpanel-collapsed .nav-bracket
			{
				margin:25px 5px;
			}
			a
			{
				color:maroon;
			}
			.mainpanel
			{
				max-height: 100%;
			}
		</style> -->
		<style>

			.mainpanel
			{
				position: relative;
			}
			.headerbar
			{
				position: fixed;
				z-index: 100;
				min-width: 82%;
				max-width: 90%;
				margin-bottom: 0;
				border-bottom: 1px solid #DDD;
			}
			.headermenu .dropdown-toggle
			{
				padding: 8px 10px 7px 10px;
			}
			.pageheader
			{
				position: absolute;
    			top: 50px;
    			width: 100%;
			}
			.contentpanel
			{
				z-index: 50;
				top: 130px;
				background: #FFF;
			}
		</style>
		
	</head>

	<body onload="showJual();">
		
		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<i class="fa fa-spinner fa-spin"></i>
			</div>
		</div>

		<section style="position: relative;">
			<div class="leftpanel" style="position: fixed;left: 0;">
			
				<div class="logopanel">
					<h1><span>[</span> SILABTAN <span>]</span></h1>
				</div><!-- logopanel -->

				<div class="leftpanelinner">
				
					<!-- This is only visible to small devices -->
					<div class="visible-xs hidden-sm hidden-md hidden-lg">   
						<div class="media userlogged">
							<img alt="" src= <?php echo $hasilFoto['pictureprofile']; ?> class="media-object">
							<div class="media-body">
								<h4><?php echo $_SESSION['nama']; ?></h4>
								<span>"Life is so..."</span>
							</div>
						</div>
						<h5 class="sidebartitle actitle">Account</h5>
						<ul class="nav nav-pills nav-stacked nav-bracket mb30">
							<li>
								<a href="?page=profile"><i class="fa fa-user"></i> <span>Profile</span></a>
							</li>
							<li>
								<a href="?page=account_settings"><i class="fa fa-cog"></i> <span>Account Settings</span></a>
							</li>
							<li>
								<a href=""><i class="fa fa-question-circle"></i> <span>Help</span></a>
							</li>
							<li>
								<a href="signout.html"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a>
							</li>
						</ul>
					</div>
					<h5 class="sidebartitle">Navigation</h5>
					<ul class="nav nav-pills nav-stacked nav-bracket">
					<!--<li><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>-->
					<li><a href="<?php echo($base_url."infoUmum"); ?>"><i class="fa fa-desktop"></i> <span>Info Umum</span></a></li>
					<?php if($_SESSION['level']=="Admin"){ ?>
					<li class="nav-parent"><a href="<?php echo($base_url."infoMarket"); ?>"><i class="fa fa-archive"></i> <span>Master Data</span></a>
						<ul class="children">
							<li><a href="<?php echo($base_url."tabel_city"); ?>"><i class="fa fa-caret-right"></i> Data City</a></li>
							<li><a href="<?php echo($base_url."tabel_market"); ?>"><i class="fa fa-caret-right"></i> Data Market</a></li>
							<li><a href="<?php echo($base_url."tabel_typeproduct"); ?>"><i class="fa fa-caret-right"></i> Data Type Of Product</a></li>
							<li><a href="<?php echo($base_url."tabel_product"); ?>"><i class="fa fa-caret-right"></i> Data Product</a></li>
						</ul>
					</li>
					<?php } ?>
					<li class="nav-parent"><a href="infoMarket.php"><i class="fa fa-shopping-cart"></i> <span>Info Market</span></a>
						<ul class="children">
							<li><a href="<?php echo($base_url."infoMarket"); ?>"><i class="fa fa-caret-right"></i> Info Market</a></li>
							<?php if($_SESSION['level']=="Admin"){ ?>
								<li><a href="<?php echo($base_url."infoMarket_grab"); ?>"><i class="fa fa-caret-right"></i> Grab Data</a></li>
							<?php } ?>
							<li><a href="<?php echo($base_url."infoMarket_pemerintah"); ?>"><i class="fa fa-caret-right"></i> Info Market Pemerintah</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo($base_url."infoJual"); ?>"><i class="fa fa-tags"></i> <span>Info Jual</span></a>
					</li>
					<li>
						<a href="<?php echo($base_url."infoBeli"); ?>"><i class="fa fa-shopping-cart"></i> <span>Info Butuh</span></a>
					</li>
					<li>
						<a href=""><i class="fa fa-bars"></i> <span>More...</span></a>
					</li>
					</ul>
				</div><!-- leftpanelinner -->
			</div><!-- leftpanel -->
			
			<div class="mainpanel">

				<div class="headerbar">
					<a class="menutoggle"><i class="fa fa-bars"></i></a>
					<?php $search = (isset($_GET['search'])) ? $_GET['search'] : "";
						if (!$search)
						
							unset($_SESSION['search']);
						
					?>
					<form class="searchform" action="search.php?page=info_umum" method="post" style="float: left;margin-bottom: 0;height: 50px;">
						<input type="text" class="form-control" name="i_search" placeholder="Search here..." value="<?php
							if (isset($_SESSION['search']))
							{
								echo $_SESSION['search'];
							}
						?>" />
					</form>
					
					<div class="header-right" style="height: 50px;">
						<ul class="headermenu">

							<li>
								<div class="btn-group">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
										<img src= <?php echo $hasilFoto['pictureprofile']; ?> />
										<?php echo $_SESSION['nama']; ?>
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu dropdown-menu-usermenu pull-right">
										<li>
											<a href="?page=myprofile"><i class="glyphicon glyphicon-user"></i> My Profile</a>
										</li>
										<li>
											<a href="?page=account_settings"><i class="glyphicon glyphicon-cog"></i> Account Settings</a>
										</li>
										<li>
											<a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a>
										</li>
										<li>
											<a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a>
										</li>
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

				<?php
				if (isset($_GET['page']))
				{
					include "" . $_GET['page'] . ".php";
				}
				else
				{
					include "infoUmum.php";
				}
				?>

			</div><!-- mainpanel -->
			
			<?php include "right_panel.php"; ?>
			
		</section>

	</body>
	<script>
		$(function()
		{
			$(".mainpanel").removeAttr("style");
		});
	</script>
	
	<script src="js/tagcanvas.min.js" type="text/javascript"></script>
</html>
