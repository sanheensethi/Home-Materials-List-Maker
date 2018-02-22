<?php
	require "db/pdo.php";
	require "secure/index.php";
	header('Content-Type: text/html; charset=utf-8');
	$item = secure($_POST['item']);
	$category = $_POST['category'];
	echo $item."&nbsp;[".$category."]&nbsp;";
	try{
		$stmt = $db->prepare("INSERT INTO ".$category." VALUES (?,?)");
		$values = ['',$item];
		if($stmt->execute($values)){
			echo "Inserted Successfully";
		}else{
			echo "<p class='text-danger'>Error :</p>";
		}
	}catch(PDOException $e){
		echo "<p class='text-danger'>Error :".$e->getMessage()."</p>";
	}
?>