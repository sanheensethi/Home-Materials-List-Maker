<?php
	require_once "db/pdo.php";
	require_once "secure/index.php";
	$categoryName = $_POST['categoryname'];
	
	try{
		$stmt = $db->prepare("CREATE TABLE ".$categoryName." (item_id int(11) primary key not null auto_increment, item_name VARCHAR(255))Engine=InnoDB");
		if($stmt->execute()){
			echo "<p class='text-success'>Inserted Successfully</p>";
		}else{
			echo "<p class='text-danger'>Not Inserted</p>";
		}
	}catch(PDOException $e){
		echo "<p class='text-danger'>"."Internal Error : Might be Table Already Exixts. <br> Error : ".$e->getMessage()."</p>";
	}
?>