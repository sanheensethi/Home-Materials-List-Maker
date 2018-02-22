<?php
	require_once "db/pdo.php";
	require_once "secure/index.php";
	$tablename = secure($_POST['tablename']);
	try{
		$stmt = $db->prepare("DROP TABLE ".$tablename);
		if($stmt->execute()){
			echo "<p class='text-success'>Deleted Successfully.</p>";
		}else{
			echo "<p class='text-danger'>Not Deleted Internal Error.</p>";
		}
	}catch(PDOException $e){
		echo "<p class='text-danger'>Internal Error : Might be Table Not Exists <br> ".$e->getMessage()."</p>";
	}
?>