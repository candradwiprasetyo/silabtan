<!DOCTYPE html>
<html lang="en">
	<script language="javascript">
		function validasi(form)
		{
			if (form.username.value == "")
			{
				alert("Anda belum mengisikan Nama Pengguna.");
				form.username.focus();
				return (false);
			}

			if (form.password.value == "")
			{
				alert("Anda belum mengisikan Kata Sandi.");
				form.password.focus();
				return (false);
			}
			return (true);
		}
	</script>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="images/favicon.png" type="image/png">

		<title>SILABTAN UPN "VETERAN" JATIM</title>

		<link href="css/style.default.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="signin">

		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<i class="fa fa-spinner fa-spin"></i>
			</div>
		</div>

		<section>

			<div class="signinpanel">

				<div class="row">

					<div class="col-md-7">

						<div class="signin-info">
							<div class="logopanel">
								<h1><span>[</span> SILABTAN <span>]</span></h1>
							</div><!-- logopanel -->

							<div class="mb20"></div>

							<h5><strong>SELAMAT DATANG DI SILABTAN!</strong></h5><h5><strong>UPN "VETERAN" JATIM</strong></h5>

							<ul>
								<li>
									<i class="fa fa-arrow-circle-o-right mr5"></i> Info Umum
								</li>
								<li>
									<i class="fa fa-arrow-circle-o-right mr5"></i> Info Pasar
								</li>
								<li>
									<i class="fa fa-arrow-circle-o-right mr5"></i> Info Jual
								</li>
								<li>
									<i class="fa fa-arrow-circle-o-right mr5"></i> Info Buruh
								</li>
								<li>
									<i class="fa fa-arrow-circle-o-right mr5"></i> Konsultasi Lewat Pesan
								</li>
								<li>
									<i class="fa fa-arrow-circle-o-right mr5"></i> more...
								</li>
							</ul>
							<div class="mb20"></div>
							<strong>Belum menjadi member? <a href="signup.php">Sign Up</a></strong>
						</div><!-- signin0-info -->

					</div><!-- col-sm-7 -->

					<div class="col-md-5">

						<form name="login" method="post" action="cek_login.php" onSubmit="return validasi(this)">
							<h4 class="nomargin">Sign In</h4>
							<p class="mt5 mb20">
								Login untuk mengakses akun anda.
							</p>

							<input type="text" name="username" id="identity" class="form-control uname" placeholder="Masukkan Email Anda" />
							<input type="password" name="password" id="password" class="form-control pword" placeholder="Masukkan Kata Sandi" />
							<a href=""><small>Lupa Password?</small></a>
							<input type="submit" class="btn btn-success btn-block" value="Sign In">
							</input>
						</form>
					</div><!-- col-sm-5 -->

				</div><!-- row -->

				<div class="signup-footer">
					<div class="text-center">
						&copy; 2015. All Rights Reserved.
					</div>
					<!--
					<div class="pull-right">
					Created By: <a href="http://themepixels.com/" target="_blank">ThemePixels</a>
					</div>
					-->
				</div>

			</div><!-- signin -->

		</section>

		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/jquery-migrate-1.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/modernizr.min.js"></script>
		<script src="js/retina.min.js"></script>

		<script src="js/custom.js"></script>

	</body>
</html>
