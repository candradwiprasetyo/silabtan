<?php 
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>SILABTAN UPN "VETERAN" JATIM</title>

  <link rel="stylesheet" href="css/style.default.css" />

		<link rel="stylesheet" href="css/bootstrap-fileupload.min.css" />
		<link rel="stylesheet" href="css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="css/jquery.tagsinput.css" />
		<link rel="stylesheet" href="css/colorpicker.css" />
		<link rel="stylesheet" href="css/dropzone.css" />
		<link rel="stylesheet" href="css/bootstrap-timepicker.min.css" />
		
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <script type="text/javascript">
function AjaxFunction()
{
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
		  try
   			 		{
   				 httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    				}
  			catch (e)
    				{
    			try
      		{
      		httpxml=new ActiveXObject("Microsoft.XMLHTTP");
     		 }
    			catch (e)
      		{
      		alert("Your browser does not support AJAX!");
      		return false;
      		}
    		}
  }
function stateck() 
    {
    if(httpxml.readyState==4)
      {
//alert(httpxml.responseText);
var myarray = JSON.parse(httpxml.responseText);
// Remove the options from 2nd dropdown list 
for(j=document.testform.pasar.options.length-1;j>=0;j--)
{
document.testform.pasar.remove(j);

}


for (i=0;i<myarray.data.length;i++)
{
	
var optn = document.createElement("OPTION");
optn.text = myarray.data[i].NAMEOFMARKET;
optn.value = myarray.data[i].IDMARKET;  // You can change this to subcategory 
document.testform.pasar.options.add(optn);

} 
      }
    } // end of function stateck
	var url="pasar.php";
var cat_id=document.getElementById('s1').value;
url=url+"?cat_id="+cat_id;
url=url+"&sid="+Math.random();
httpxml.onreadystatechange=stateck;
//alert(url);
httpxml.open("GET",url,true);
httpxml.send(null);
  }
</script>
</head>
<link rel="stylesheet" href="css/table-new-create.css" />
<link href="css/jquery.datatables.css" rel="stylesheet">

<script src="js/table-new-create.js"></script>
<script src="js/jquery.datatables.min.js"></script>

<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
  <div class="leftpanel">
    
    <div class="logopanel">
        <h1><span>[</span> SILABTAN <span>]</span></h1>
    </div><!-- logopanel -->
    
    <div class="leftpanelinner">
        
        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">   
            <div class="media userlogged">
                <img alt="" src="images/photos/loggeduser.png" class="media-object">
                <div class="media-body">
                    <h4>John Doe</h4>
                    <span>"Life is so..."</span>
                </div>
            </div>
          
            <h5 class="sidebartitle actitle">Account</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="?page=myprofile"><i class="fa fa-user"></i> <span>Profile</span></a></li>
              <li><a href=""><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
              <li><a href=""><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
              <li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>
      
      <h5 class="sidebartitle">Navigation</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
	  <!--<li><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>-->
        <li><a href="infoUmum.php"><i class="fa fa-desktop"></i> <span>Info Umum</span></a></li>
        <?php 
		if($_SESSION['level']=="Admin"){
		?>
		<li class="nav-parent"><a href="infoMarket.php"><i class="fa fa-archive"></i> <span>Master Data</span></a>
			<ul class="children">
            <li><a href="tabel_city.php"><i class="fa fa-caret-right"></i> Data City</a></li>
            <li><a href="tabel_market.php"><i class="fa fa-caret-right"></i> Data Market</a></li>
			<li><a href="tabel_typeproduct.php"><i class="fa fa-caret-right"></i> Data Type Of Product</a></li>
			<li><a href="tabel_product.php"><i class="fa fa-caret-right"></i> Data Product</a></li>
            
          </ul>
		</li>
		<?php 
		}else{
			
		}
		?>
		<li class="nav-parent"><a href="infoMarket.php"><i class="fa fa-shopping-cart"></i> <span>Info Market</span></a>
			<ul class="children">
            <li><a href="infoMarket.php"><i class="fa fa-caret-right"></i> Info Market</a></li>
			<?php 
		if($_SESSION['level']=="Admin"){
		?>
            <li><a href="infoMarket_grab.php"><i class="fa fa-caret-right"></i> Grab Data</a></li>
			<?php
		}else{
			
		}
			?>
			<li><a href="infoMarket_pemerintah.php"><i class="fa fa-caret-right"></i> Info Market Pemerintah</a></li>
            
          </ul>
		</li>
        <li><a href="infoJual.php"><i class="fa fa-tags"></i> <span>Info Jual</span></a></li>
        <li><a href="infoBeli.php"><i class="fa fa-shopping-cart"></i> <span>Info Butuh</span></a></li>
        <li><a href=""><i class="fa fa-bars"></i> <span>More...</span></a></li>   
      </ul>
      
      
      
    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->
  