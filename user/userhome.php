<?php
session_start();
$lid=$_SESSION['lid'];
if($lid>0)
{
	echo $lid;
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