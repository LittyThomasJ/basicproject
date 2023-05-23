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
<h3>Welcome</h3>
<?php
$row=mysqli_fetch_array($select);

	?>
	<table>
	<tr><td>FirstName</td><td><?php echo $row['fname']; ?></td></tr>
	<tr><td>LastName</td><td><?php echo $row['lname']; ?></td></tr>
	<tr><td>Dob</td><td><?php echo $row['dob']; ?></td></tr>
	<tr><td>Gender</td><td><?php echo $row['gender']; ?></td></tr>
	<tr><td>Address</td><td><?php echo $row['address']; ?></td></tr>
	<tr><td>phone</td><td><?php echo $row['phone']; ?></td></tr>
	<tr><td>country</td><td><?php echo $row['country']; ?></td></tr>
	<tr><td>pic</td><td><img src="../upload/<?php echo $row['pic'] ?>" width="30" height="30"/></tr>
	<!--<tr><td>email</td><td><?php echo $row['email']; ?></td></tr>-->
	<tr><td><a href="edit.php">Edit</a></td></tr>
	</table>
<div class=footer>
</div>
</body>
</html>
<?php
}
?>