<?php session_start(); ?>
<?php
 include 'db.php';
$id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM user WHERE id  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
			

?>
<form action="deluserexec.php" method="post">
<p>Are you sure you want to delete this record!</p>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" nsme="ok" value="Delete">
</form>