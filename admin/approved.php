<?php
session_start();
$lid=$_SESSION['lid'];
if($lid>0)
{
	//echo $lid;
	
	include("../connection.php");
	
	$sel="SELECT login.email,login.login_id,reg.fname,reg.address,reg.gender,reg.phone,reg.pic FROM login INNER JOIN reg ON login.login_id=reg.login_id WHERE login.status=1";
	$obj=new db();
	$select=$obj->execute($sel);
	
	
	
	
	
	
	
	?>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">

<meta charset="UTF-8">
<title>sample</title>
</head>
<body>
<div class="header">
<a  href="admin.php">Home</a>
<a  href="newuser.php">New user</a>
<a class="active" href="approveuser.php">Approve user</a>
<a  href="../logout.php">Logout</a>

</div>
<table>
<tr>
<th>
Name
</th>
<th>
Address
</th>
<th>
Gender
</th>
<th>
Email
</th>
<th>
Phone
</th>
<th>
Image
</th>

</tr>
<?php
while($row=mysqli_fetch_array($select))
{
	?>

<tr>
<td>
<?php
echo $row['fname'];
?>
</td>
<td>
<?php
echo $row['address'];
?>
</td>
<td>
<?php
echo $row['gender'];
?>
</td>
<td>
<?php
echo $row['email'];
?>
</td>
<td>
<?php
echo $row['phone'];

?>
</td>
<td>
<img src="../upload/<?php echo $row['pic'] ?>" width="30" height="30"/>
</td>

</tr>
<?php 
}
?>
</table>

<div class=footer>
</div>
</body>
</html>
<?php

}
else
{
	header("location:../login.php");
}
?>