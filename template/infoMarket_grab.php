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
			<div class="panel panel-primary">
				<div class="panel-body">
					<form name="testform" method="post" action="proses_grab.php" class="form-horizontal form-bordered" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-sm-3 control-label">Tanggal:</label>
							<div class="col-sm-3">
								<div class="input-group">
									<input type="text" name="tanggal" readonly class="form-control" id="datepicker">
									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Jenis Info Market:</label>
							<div class="col-sm-5">
								<select name="jenis" id="jenis" class="form-control chosen-select" data-placeholder="" onchange="cek()">
									<option value=""></option>
									<option value="konsumen">Konsumen</option>
									<option value="produsen">Produsen</option>
								</select>
							</div>
						</div>
						<div class="form-group" id="area" style="display:none;">
							<label class="col-sm-3 control-label">Area:</label>

							<div class="col-sm-5" style="padding-right: 0;">
								<select name="area" id='s1' class="form-control chosen-select" data-placeholder="" onchange="AjaxFunction();">
									<option value=""></option>

									<?php 
									$query=mysql_query("Select * from tsilabtan_city");
									while($row=mysql_fetch_array($query)){
									?>	
										<option value="<?php echo $row['IDCITY'];?>"><?php echo $row['NAMEOFCITY'];?></option>
										
									<?php
									}
									?>
								</select>
							</div>
						</div>
						<div class="form-group" id="pasar" style="display:none;">
							<label class="col-sm-3 control-label">Pasar:</label>
							<div class="col-sm-5" style="padding-right: 0;">
								<select name="pasar" id='s2'  class="form-control" data-placeholder="">
									<option value=""></option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<center>
								<input type="submit" name="submit" class="btn btn-primary" value="Cek"></input>&nbsp;
								<input type="submit" name="submit" class="btn btn-success" value="Save"></input>
								<!--<input type="submit" name="submit" class="btn btn-primary" value="Submit"></input>-->
							</center>
						</div>
					</form>
					<?php
						if (isset($_GET['tanggal']))
						{
							$date = $_GET['tanggal'];

							if (isset($_GET['area']))
							{
								$area = $_GET['area'];
								$pasar = $_GET['pasar'];
								$sql_area = mysql_query("SELECT * FROM tsilabtan_city WHERE IDCITY='" . $area . "'");
								$row = mysql_fetch_array($sql_area);
								$codecity = $row['CODECITY'];
								$sql_pasar = mysql_query("SELECT * FROM tsilabtan_market WHERE IDMARKET='" . $pasar . "'");
								$row_pasar = mysql_fetch_array($sql_pasar);
								$nameofmarket = $row_pasar['NAMEOFMARKET'];
							}
							//echo $codecity;
							$ch = curl_init();

							if ($_GET['jenis'] == "konsumen")
							{
								$url = 'http://siskaperbapo.com/harga/tabel.nodesign/';

								include ('tabel_cek_konsumen.php');

							}
							elseif ($_GET['jenis'] == "produsen")
							{
								$url = 'http://siskaperbapo.com/produsen/tabel.nodesign/';

								include ('tabel_cek_produsen.php');
							}
							else
							{
							}
						}
					?>
				</div><!-- panel-body -->
			</div><!-- panel -->
		</div>
	</div>

</div><!-- contentpanel -->
<SCRIPT lang="javascript">
	function cek()
	{
		var jenis = document.getElementById("jenis").value;
		if (jenis == "konsumen")
		{
			document.getElementById("area").style.display = 'block';
			document.getElementById("pasar").style.display = 'block';
		}
		else
		{
			document.getElementById("area").style.display = 'none';
			document.getElementById("pasar").style.display = 'none';
		}
	}
</SCRIPT>
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