<?php
	header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="assests/css/bootstrap.min.css">
</head>
<body>
	<div class="jumbotron bg-danger">
		<h1 class="text-center" style="color:#fff;">Insert Data</h1>
	</div>
	<div class="container">
		<a href="javascript:void(0)" onclick="redirect('index.php')" class="btn btn-default">Create List</a>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" id="item" class="form-control" placeholder="Item Name ... ">
				</div>
				<div class="form-group">
					<input type="submit" id="sub" class="btn btn-success" placeholder="Item Name ... ">
				</div>
			</div>
			<div class="col-md-12">
				<p id="show" class="text-success"></p>
			</div>
		</div>
	</div>
<script type="text/javascript" src="assests/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assests/js/tether/tether.js"></script>
<script type="text/javascript" src="assests/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	$('#sub').click(function(){
	var item = $('#item').val();
	var category = "<?php echo $_GET['category']; ?>";
		$.ajax({
	url:"system/InsertData.php",
	type:"POST",
	data:{'item':item,'category':category},
	success:function(data){
	$('#show').html(data);
	}
	});
	});
	});
	
	function redirect(file){
	window.location.href=file;
	}
</script>
</body>
</html>