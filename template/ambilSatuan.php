<?php
   /*  mysql_connect("localhost", "root", "") or die(mysql_error ());
    mysql_select_db("dbsilabtan2") or die(mysql_error());  */
	
	include "koneksi.php";
	
    $name = $_REQUEST['name'];
	$tabel = $_REQUEST['tabel'];
	
		$query = mysql_query("SELECT nameofmeaunit as unit
							  FROM tsilabtan_measureunit
							  WHERE nameofmeaunit LIKE '%$name%' 
							");
		$numrows = mysql_num_rows($query);
		while($row = mysql_fetch_array($query)){
			echo "<option value='".$row['idmeasureunit']."'>".$row['unit']."</option>";
		}  
	
	
	
	//echo "<option selected="selected"></option>";
	//echo $row['idproduct'];
	//if($numrows>1){
	//echo "<option>bla " . "</option>";
		
/* 	}
	else{
		while($row = mysql_fetch_row($query)){
			echo "<option>" . $row[2] . " " . $row[3] . "</option>";
		}  
	}
	*/
	//echo "</select>"; 
   //mysql_close();
?>