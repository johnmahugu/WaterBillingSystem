<?php
include 'db.php';
	$id = $_POST['id'];
	mysql_query("DELETE from user WHERE id='$id'");
			

		 echo "<script>windows: location='user.php'</script>";				
			