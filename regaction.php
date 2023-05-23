<?php
include("connection.php");
 if(isset($_POST['submit']))
 {
$name =$_FILES['file']['name'];
//echo $name;
$temp_name =$_FILES['file']['tmp_name'];
move_uploaded_file($temp_name,'upload/'.$name);
 
$namee=$_POST['txtfname'];
//echo $name;
$lname=$_POST['txtlname'];
//echo $lname;
$date=$_POST['txtdate'];
//echo $date;
$email=$_POST['txtemail'];
//echo $lname;
$gender=$_POST['sex'];
//echo $gender;
$address=$_POST['txtAddress'];
//echo $address;
$phone=$_POST['txtphone'];
//echo $phone;
$country=$_POST['ddlcountry'];
//echo $country;
//$file=$_POST['nfile'];
//echo $password;
$pass=$_POST['txtpass'];
//echo $password;
 
$sql="Insert into login(email,pass,role,status) values('$email','$pass','user',0)";
$obj=new db();
$obj->execute($sql);
$sel="select login_id from login where email='$email' and pass='$pass'";
$login=$obj->execute($sel);
//echo $login; error due to string
$str=mysqli_fetch_array($login);
//echo $str[0];
$lo=$str[0];
//echo $str['login_id']; or option of above
$sqlll="Insert into reg(fname,lname,dob,gender,address,phone,country,pic,login_id) values
('$namee','$lname','$date','$gender','$address',$phone,'$country','$name',$lo)";
$objj=new db();
$objj->execute($sqlll);
}
 header("location:login.php");
?>