<?php
	echo "<a class='btn btn-default' onclick='redirect()' href='javascript:void(0)'>Download <i class='fa fa-file-excel-o'></i></a>";	
	echo "<script>
		function redirect(){
			window.location.href=\"system/download.php?check=".$_POST['check']."&&values=".$_POST['values']."&&filename=".$_POST['filename']."\"
		}
	</script>";
?>