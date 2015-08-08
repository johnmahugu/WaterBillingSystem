<?php
 session_start();
 
$hostname = 'localhost';       
 $dbname   = 'waterbilling';
 $username = 'root';            
 $password = '';       
 
 mysql_connect($hostname, $username, $password) or DIE('NOT Connected!');
 mysql_select_db($dbname) or DIE('Database name is not available!');
 $login = mysql_query("SELECT * FROM user WHERE (username = '" .($_POST['username']) . "') and (password = '" .($_POST['password']) . "')");
 $row=mysql_fetch_array($login);  
 
 if($row){
 $_SESSION['id'] = $row['id'];

 echo '<script>windows: location="billing.php"</script>';
	}
	else {
		header ("location: index.php?err");
		}
 
 
?>
