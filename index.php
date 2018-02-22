<?php
	if(file_exists('system/db/inidb.php') && file_exists('system/ini.php')){
		header('Location: MakeListPage.php');
	}else{
		header('Location: ini.html');
	}
?>