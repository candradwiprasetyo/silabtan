<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Bracket Responsive Bootstrap3 Admin</title>

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
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
    <div class="signuppanel">
        
        <div class="row">
            
            <div class="col-md-3">
                <!--
                <div class="signup-info">
                    <div class="logopanel">
                        <h1><span>[</span> SILABTAN <span>]</span></h1>
                    </div><!-- logopanel 
                
                    <div class="mb20"></div>
                
                    <h5><strong>Bootstrap 3 Admin Template!</strong></h5>
                    <p>Bracket is a theme that is perfect if you want to create your own content management, monitoring or any other system for your project.</p>
                    <p>Below are some of the benefits you can have when purchasing this template.</p>
                    <div class="mb20"></div>
                    
                    <div class="feat-list">
                        <i class="fa fa-wrench"></i>
                        <h4 class="text-success">Easy to Customize</h4>
                        <p>Bracket is made using Bootstrap 3 so you can easily customize any element of this template following the structure of Bootstrap 3.</p>
                    </div>
                    
                    <div class="feat-list">
                        <i class="fa fa-compress"></i>
                        <h4 class="text-success">Fully Responsive Layout</h4>
                        <p>Bracket is design to fit on all browser widths and all resolutions on all mobile devices. Try to scale your browser and see the results.</p>
                    </div>
                    
                    <div class="feat-list mb20">
                        <i class="fa fa-search-plus"></i>
                        <h4 class="text-success">Retina Ready</h4>
                        <p>When a user load a page, a script checks each image on the page to see if there's a high-res version of that image. If a high-res exists, the script will swap that image in place.</p>
                    </div>
                    
                    <h4 class="mb20">and much more...</h4>
                
                </div><!-- signup-info -->
                
            </div><!-- col-sm-6 -->
            
            <div class="col-md-6">
                
                <form method="post" action="submitRegistrasi-edit.php">
                    
                    <h3 class="nomargin">Sign Up</h3>
                    <p class="mt5 mb20">Already a member? <a href="signin.php"><strong>Sign In</strong></a></p>
                
                    <label class="control-label">Name</label>
                    <div class="row mb10">
                        <div class="col-sm-6">
                            <input type="text" name="nama_depan" class="form-control" placeholder="Firstname" />
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="nama_belakang" class="form-control" placeholder="Lastname" />
                        </div>
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Username</label>
                        <input type="text" name="username" class="form-control" />
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Password</label>
                        <input type="password" name="password" class="form-control" />
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Retype Password</label>
                        <input type="password" name="pass_ulang" class="form-control" />
                    </div>
                    <!--
                    <label class="control-label">Birthday</label>
                    <div class="row mb10">
                        <div class="col-sm-5">
                            <select class="form-control chosen-select" data-placeholder="Month">
                                <option value=""></option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="Day" />
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Year" />
                        </div>
                    </div>
                    -->
                    <div class="mb10">
                        <label class="control-label">Email Address</label>
                        <input type="text" name="email" class="form-control" />
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Location</label>
                        <select class="form-control chosen-select" name="kota" data-placeholder="Choose a City...">
                          <option value=""></option>
                          <?php 
                          $query = mysql_query("SELECT * FROM tsilabtan_city");
                          while($row = mysql_fetch_array($query)){
                            ?>
                            <option value="<?php echo $row['IDCITY'];?>"><?php echo $row['NAMEOFCITY']; ?></option>
                            <?php
                          }
                          ?>
                        </select>
                    </div>
                    <br />
                    <button class="btn btn-success btn-block">Sign Up</button>     
                </form>
            </div><!-- col-sm-6 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2016. All Rights Reserved.
            </div>
            <div class="pull-right">
                Created By: <a href="" target="_blank">AchmadNuruddin</a>
            </div>
        </div>
        
    </div><!-- signuppanel -->
  
</section>


<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/jquery.cookies.js"></script>
<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>

<script src="js/chosen.jquery.min.js"></script>

<script src="js/custom.js"></script>
<script>
    jQuery(document).ready(function(){
        
        // Chosen Select
        jQuery(".chosen-select").chosen({
            'width':'100%',
            'white-space':'nowrap',
            disable_search: true
        });
        
    });
</script>

</body>
</html>
