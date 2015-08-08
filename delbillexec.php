<?php
include 'db.php';
	$id = $_POST['id'];
	mysql_query("DELETE from bill WHERE id='$id'");
			

		 echo "<script>windows: location='bill.php'</script>";				
			