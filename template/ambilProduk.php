<?php
   /*  mysql_connect("localhost", "root", "") or die(mysql_error ());
    mysql_select_db("dbsilabtan2") or die(mysql_error());  */
	
	include "koneksi.php";
	
    $name = $_REQUEST['name'];
	$tabel = $_REQUEST['tabel'];
	
		$query = mysql_query("SELECT idproduct,concat(typeofproduct,',',nameofproduct) as produk
							  FROM tsilabtan_product
							  WHERE nameofproduct LIKE '%$name%' OR typeofproduct LIKE '%$name%'
							");
		$numrows = mysql_num_rows($query);
		while($row = mysql_fetch_array($query)){
			echo "<option value='".$row['idproduct']."'>".$row['produk']."</option>";
		}  
	
?>