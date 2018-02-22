<?php
	require_once "db/pdo.php";
	require_once "secure/index.php";
	header('Content-Type: text/html; charset=utf-8');
	try{
		$stmt = $db->prepare("SHOW TABLES");
		if($stmt->execute()){
			$categories = $stmt->fetchAll(PDO::FETCH_OBJ);
			foreach($categories as $category){
				$query = "SELECT * FROM ".$category->Tables_in_sethichatbhandar2;
				$stmt2 = $db->prepare($query);
						 $stmt2->execute();
				$results = $stmt2->fetchAll(PDO::FETCH_OBJ);
				
				echo "<div id=".($category->Tables_in_sethichatbhandar2)." name='".$category->Tables_in_sethichatbhandar2."'>";
				//echo "<section name='".$category->Tables_in_sethichatbhandar2."' id='#".$category->Tables_in_sethichatbhandar2."'>";
				echo "<h3><i>".$category->Tables_in_sethichatbhandar2."</i></h3>";
				if(empty($results)){
					echo "No Items <br><br>";
				}
				foreach($results as $result){
					echo	"<label>".$result->item_name."</label>
								<div class='form-inline'>
									<div class='form-group'>
										<input type='checkbox' name='check[]' value='".$result->item_name."' class='check' />&nbsp;
									</div>
								</div><br>";
				}
				echo "</div>";
		//		echo "</section>";
			}
			
		}else{
			echo "<p class='text-danger'>Internal Error , Showing Categories</p>";
		}
		
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	echo "
	<script>
	$('.check').click(function(){
		if($(this).is(':checked')){
			$(this).after('&nbsp;&nbsp;<input type=\"text\"  placeholder=\"Quantity...\" class=\"form-control products\" name=\"products[]\" required\>&nbsp;&nbsp;');
		}else{
			$(this).next().remove();
		}
	});
	</script>	
	";
?>