<?php
   /*  mysql_connect("localhost", "root", "") or die(mysql_error ());
    mysql_select_db("dbsilabtan2") or die(mysql_error());  */
	
	include "koneksi.php";
	
    $name = $_REQUEST['name'];
	$tabel = $_REQUEST['tabel'];
	//if($tabel == 'pasar'){
		$query = mysql_query("SELECT m.idmarket, concat(m.nameofmarket,', ',c.nameofcity,',',d.nameofdistrict) AS kota
							  FROM tsilabtan_market m 
							  JOIN tsilabtan_district d ON (m.iddistrict = d.iddistrict)
							  JOIN tsilabtan_city c ON (c.idcity = d.idcity)
							  WHERE m.NAMEOFMARKET LIKE '%$name%'
							");
							echo "SELECT m.idmarket, concat(m.nameofmarket,', ',c.nameofcity,',',d.nameofdistrict) AS kota
							  FROM tsilabtan_market m 
							  JOIN tsilabtan_district d ON (m.iddistrict = d.iddistrict)
							  JOIN tsilabtan_city c ON (c.idcity = d.idcity)
							  WHERE m.NAMEOFMARKET LIKE '%$name%'
							";
		$numrows = mysql_num_rows($query);
		while($row = mysql_fetch_array($query)){
			echo "<option value='".$row['idmarket']."'>".$row['kota']."</option>";
		}  
	//}
	
	
	
	
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