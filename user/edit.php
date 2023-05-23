<?php
session_start();
$lid=$_SESSION['lid'];
//echo $lid;
	if($lid>0)
	{
	include("../connection.php");
	
	
	$obj=new db();
	$sel="select * from reg where login_id=$lid";
	$select=$obj->execute($sel);
	
	
	
	
	
	
	
	?>
	<!doctype HTML>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">

<meta charset="UTF-8">
<title>sample</title>
</head>
<body>
<div class="header">
<a  href="userhome.php">Home</a>
<a  href="profile.php">Profile</a>
<a href="changeps.php">Change Password</a>
<a  href="../logout.php">Logout</a>

</div>
<?php
$row=mysqli_fetch_array($select);

	?>
	<form name="edit" action="editaction.php" method="post">
	<table>
	<tr><td>FirstName</td>
	<td><input type="text"  name="name" id="fname" value="<?php echo $row['fname'];?>" /></td></tr>
	<tr><td><input type="submit" value="submit" name="submit" ></td></tr>
	</table>
	</form>
<div class=footer>
</div>
</body>
</html>
<?php
}
?>