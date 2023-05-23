<?php
include("connection.php");
session_start();
 if(isset($_POST['submit']))
 {
	 $email=$_POST['txtem'];
	//echo $email;
	$pass=$_POST['txtpa'];
	//echo $pass;
	$obj=new db();
	$select="select * from login where email='$email' and pass='$pass'and status=1 ";
	$data=$obj->execute($select);
	if(mysqli_num_rows($data)>0)
	{
		$row=mysqli_fetch_array($data);
		if($row['role']=='admin')
		{
			$_SESSION['lid']=$row['login_id'];
			$_SESSION['role']=$row['role'];
			header("location:admin/admin.php");
		}
		else if($row['role']=='user')
		{
			$_SESSION['lid']=$row['login_id'];
			$_SESSION['role']=$row['role'];
			header("location:user/userhome.php");
		}
	}
	else
	{
		?>
		<script>
		alert("check username and password");
		window.location="login.php";
		</script>
		<?php
		//echo "err";
		
	}
 }
?>