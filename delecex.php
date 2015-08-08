<?php
include 'db.php';
	$id = $_POST['id'];
	mysql_query("DELETE from owners WHERE id='$id'");
			

		 echo "<script>windows: location='billing.php'</script>";				
			