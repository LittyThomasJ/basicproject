<!doctype HTML>
<html>
<head>
<!--<style>
.header
{
background-color:purple;
padding:40px;
bottom:0;
width:100%;
}
.header a
{
text-decoration:none;
background-color:white;
padding:10px;
color:black;
border-radius:6px;
}
.header a:hover
{
padding:25px;
color:red;
background-color:pink;

}
.header a.active
{
background-color:skyblue;
padding:30px;
}
.footer
{
background-color:purple;
padding:40px;
bottom:0;
width:100%;
position:fixed;

}
</style>-->
<link rel="stylesheet" href="css/style.css">

<meta charset="UTF-8">
<title>sample</title>
</head>
<body>
<div class="header">
<a  href="#">Home</a>
<a  href="#">About</a>
<a href="#">Contact</a>
<a  href="Sregistration.php">SignUp</a>
<a class="active" href="login.php">SignIn</a>
</div>
<form action="logaction.php" name="login" method="post">
<table>
<tr><td>
<label>Email</label></td><td><input type="email" name="txtem" id="txtem" placeholder="enter"></td></tr>
<tr><td>
<label>Password</label></td><td><input type="password" placeholder="enter" name="txtpa" id="txtpa"></td></tr>
<tr><td><input type="submit" value="submit" name="submit"></td></tr>
</table>
</form>
<div class=footer>
</div>
</body>
</html>