<?php
session_start();
$id=$_GET['id'];
//echo $id;
include("../connection.php");
$upd="delete from login where login_id=$id";
$obj=new db();
$obj->execute($upd);
header("location:newuser.php");
?>