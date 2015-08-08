<?php session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="index.php"</script>';
	
	}
?>
<?php
$session=$_SESSION['id'];
include 'db.php';
$result = mysql_query("SELECT * FROM user where id= '$session'");
while($row = mysql_fetch_array($result))
  {
  $sessionname=$row['name'];

  }
?>

<p style="color:#F00; font-size:12px;">Welcome <?php echo $sessionname;?></p>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox({
		loadingImage : 'src/loading.gif',
		closeImage   : 'src/closelabel.png'
	  })
	})
  </script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
#header ul li{
	list-style:none;
	float:left; margin-top:30px; margin-left:10px;}
#header { width:650px; height:100px;}

</style>
<title>user</title>
</head>

<body>
<div style=" width:650px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba<br />
(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:5%;">
<div id="header">
<ul>
<li><a href="billing.php">Home</a></li>
<li><a href="bill.php">Billing</a></li>
<li><a href="user.php">Users</a></li>

<li><a href="logout.php">logout</a></li>


</ul>
</div>
<p><a rel="facebox" href="adduser.php">Add</a></p>
<center>
<?php
include 'db.php';

$result = mysql_query("SELECT * FROM user");

echo "<table border='1' bgcolor='#fff'>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
<th>Name</th>
<th>Action</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
 echo "<td><a rel='facebox' href='edituser.php?id=".$row['id']."'>Edit </a>| ";
 echo "<a rel='facebox' href='deluser.php?id=".$row['id']."'>Del</td>";
  echo "</tr>";
  }
echo "</table>";

?>

<p>&nbsp;</p>

</center>






</div>
</body>
</html> <script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
 