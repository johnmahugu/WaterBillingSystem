<?php session_start(); ?>
<?php
  include 'db.php';
$owner_id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM owners WHERE id  = '$owner_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$lname= $test['lname'] ;					
				$fname=$test['fname'] ;
				$mi=$test['mi'] ;
				$address=$test['address'] ;
				$contact=$test['contact'] ;

?>

<p><h1>Owners Bill</h1></p>
 <h1>Name: <?php echo $lname.'&nbsp;' .$fname.'&nbsp;'.$mi;?></h1>
<p><?php $date=date('y/m/d H:i:s');
 echo $date;?></p>
 <form method="post" action="addbill.php">
 <table width="346" border="1">
  <tr>
  <input type="hidden" name="owners_id" value="<?php echo $id; ?>" />
  <input type="hidden" name="date" value="<?php echo $date; ?>" />
    <td width="118">Previous Reading:</td>
    <td width="66"><input type="text" name="prev"  /></td>
    <td>Cu.m</td>
  </tr>
  <tr>
    <td>Present Reading:</td>
    <td><input type="text" name="pres"  /></td>
    <td>Cu.m</td>
  </tr>
  <tr>
    <td>Price/Cu.m</td>
    <td><input type="text" name="price" value="10"  /></td>
    <td>php</td>
  </tr>
   <tr>
    <td><input type="submit" name="total" value="Add"  /></td>
  </tr>
</table>
</form>