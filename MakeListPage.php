<?php
	if(file_exists('init.php')){
		 require_once('init.php');
		
	}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html;" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="assests/css/bootstrap.min.css">
<link rel="stylesheet" href="assests/css/font-awesome.css">
<link rel="stylesheet" href="assests/css/style.css">
</head>
<body>
<div>
	<div class="jumbotron bg-danger" style="width:100%;">
		<h1 class="text-center" style="color:#fff"><?php $com = isset($env['company']) ? $env['company'] : 'Home'; echo $com; ?></h1>
	</div>
</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div id="CreateSection"></div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
				<h3><a href="insertCategory.php">Insert Your Own Category and Items</a></h3>
			</div>
		</div>
	</div><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<input type="text" class="form-control" id="filename" placeholder="Filename...">
			</div>
		</div><br><br>
		<!-- Display Data Here -->
		<div id="ItemsLists"></div>	
		<!-- Display Data Ends Here -->
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 offset-5">
				<input type="submit" class="btn btn-danger" id="submit">
			</div>
		</div>
	</div>
	<br><br>
<div id="show"></div>
	<br><br><br>
<footer class="jumbotron text-center" style="margin-bottom:0;">
		
	<p>&copy; Copyright (2018) Sanheen Sethi</p>
</footer>

<script type="text/javascript" src="assests/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assests/js/tether/tether.js"></script>
<script type="text/javascript" src="assests/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assests/js/MakeListPage.js"></script>
<script type="text/javascript" src="assests/js/Scroll.js"></script>
</body>
</html>