<?php
//session_start();

//$lid=$_SESSION['lid'];
//echo $id;
include("../connection.php");
//include("connection.php");
 
//$name =$_FILES['file']['name'];
$namee=$_POST['name'];
echo $namee;exit();
$sql="update login set fname=$namee where login_id=$lid ";
$obj=new db();
$obj->execute($sql);
 
?>