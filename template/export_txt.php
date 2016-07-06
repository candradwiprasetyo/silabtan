<?php

$fh=fopen( 'report.txt', 'w');
include 'koneksi.php';
$res=mysql_query("SELECT  cp.status 
								FROM tsilabtan_status cp 
								JOIN tsilabtan_user p ON (cp.username = p.username) 
								WHERE cp.tsi_idstatus='0' AND cp.generalsellorneedorinfo IS NULL
								ORDER BY cp.idstatus DESC");



$output=' ';





while($row = mysql_fetch_array($res)){
	$num=mysql_num_fields($res);
	$last=$num-1;
	for($i=0;$i<$num;$i++){
			fwrite($fh,$row[$i]);
			if($i !=$last){
				fwrite($fh,",");
				
			}
		
		
	}fwrite($fh,"\n");
	
	
}fclose($fh);
	/*{
    foreach($row as $val)
    {
        $output .= "$val | ";
    }
    //$output = ereg_replace(" | \\$", "\ ", $output); //cleans up last pipe
}

header('Content-type: text/plain');

// It will be called report.txt
header('Content-Disposition: attachment; filename="report.txt"');

print($output);




SELECT cp.idstatus, cp.status 
								FROM tsilabtan_status cp 
								JOIN tsilabtan_user p ON (cp.username = p.username) 
								WHERE cp.tsi_idstatus='0' AND cp.generalsellorneedorinfo IS NULL
								ORDER BY cp.idstatus DESC*/
								
?>