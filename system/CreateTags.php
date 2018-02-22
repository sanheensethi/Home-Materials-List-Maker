<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
	require_once "db/pdo.php";
	require_once "secure/index.php";
	header('Content-Type: text/html; charset=utf-8');
	try{
		$stmt = $db->prepare('SHOW TABLES');
		if($stmt->execute()){
			$results = $stmt->fetchAll(PDO::FETCH_OBJ);
			echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-dark\">";
			echo "<a class=\"navbar-brand\" href=\"javascript:void(0)\">Items</a>
			<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
			<span class=\"navbar-toggler-icon\"></span>
			</button>
			<div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
			<div class=\"navbar-nav\">";
			foreach($results as $result){
				echo "<li><a style='font-size:20px' class='a' href='#".$result->Tables_in_sethichatbhandar2."'>".$result->Tables_in_sethichatbhandar2."</a></li>";
			}
			echo "</div></div></nav>";
		}else{
		}
	}catch(PDOException $e){
		
	}
?>