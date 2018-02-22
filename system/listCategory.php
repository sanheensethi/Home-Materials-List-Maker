<?php
	require_once "db/pdo.php";
	try{
		$stmt = $db->prepare('Show Tables');
		if($stmt->execute()){
		$results = $stmt->fetchAll(PDO::FETCH_OBJ);
			echo "<table class='table'>";
			echo "<thead><tr><th colspan='3'>Categories That Alredy Exixts</th></tr></thead>";
			echo "<tbody>";
			foreach($results as $result){
				echo "<tr><td>".$result->Tables_in_sethichatbhandar2."</td>
						  <td><input type='submit' class='btn btn-success insert' tablename='".$result->Tables_in_sethichatbhandar2."' value='Insert Items'></td>
						  <td><input type='submit' class='btn btn-danger del' tablename='".$result->Tables_in_sethichatbhandar2."' value='Delete'></td>
					</tr>";
			}
			echo "</tbody>";
			echo "</table>";
		}else{
			echo "<p class='text-danger'>Internal Error</p>";
		}
	}catch(PDOException $e){
		echo "<p class='text-danger'>Internal Error : ".$e->getMessage()."</p>";
	}
?>