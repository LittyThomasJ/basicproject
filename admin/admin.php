<?php
session_start();
$lid=$_SESSION['lid'];
if($lid>0)
{
	//echo $lid;
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
<a  href="admin.php">Home</a>
<a  href="newuser.php">New user</a>
<a href="approved.php">Approve user</a>
<a  href="../logout.php">Logout</a>

</div>
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