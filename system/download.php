<?php
	require "ini.php";
	$cs = explode(" ",$cs);
	$keys   = explode(",",$_GET['check']) ;
	$values = explode(",",$_GET['values']);
	$filename = $_GET['filename'];
	$items = array_combine($keys,$values);
	header ( "Content-type: application/vnd.ms-excel" );
	header ( "Content-Disposition: attachment; filename=".$filename.".xls" );
	echo "<table>
		<tr>";
			foreach($cs as $c){
				if(strlen($c)>5 && strlen($c) <= 7){
					$no=3;
				}else if(strlen($c)>7 && strlen($c) <= 11){
					$no=5;
				}else{
					$no=1;
				}
				echo "<th colspan='".$no."' rowspan='2' style='font-size:22px;'>".$c."</th>";
			}
	echo "</tr>";
		for($i=0;$i<count($cs);$i++){
			echo "<tr></tr>";
		}
	echo "<tr>
			<th style='font-size:14px'>Items</th>
			<th style='font-size:14px'>Quantity</th>
			</tr>
			<tr>
			</tr>
		";
	 		foreach($items as $ItemName=>$Quantity){
	 			echo "<tr>
	 					<td style='font-size:12px;'>".$ItemName."</td>
	 					<td style='font-size:12px;'>".$Quantity."</td>
	   				 </tr>";
	 		}
	 		echo "<tr></tr>";
	 		echo "<tr>";
	 				echo "<td colspan='10'>".$us."</td>";
	 		echo "</tr>";
	 		echo "</table>";

?>