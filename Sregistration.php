<!doctype HTML>
	<html>
		<head>
			<title>Student Registration</title>
			<link rel="stylesheet" href="css/style.css">
			<meta charset="UTF-8">
			<script type="text/javascript" >
			function validate()
			{
			var fname=document.forms["Register"]["txtfname"].value;
			if(fname==0)
			{
			alert("enter first name");
			document.getElementById("fname").focus();
			return false;
			}
			var lname=document.forms["Register"]["txtlname"].value;
			if(lname==0)
			{
			alert("enter last name");
			document.getElementById("lname").focus();
			return false;
			}
			
			var date=document.forms["Register"]["txtdate"].value;
			if(date==0)
			{
			alert("enter date");
			document.getElementById("txtdate").focus();
			return false;
			}
			var email=document.forms["Register"]["txtemail"].value;
			if(email==0)
			{
			alert("enter email");
			document.getElementById("txtemail").focus();
			return false;
			}
			var gender=document.forms["Register"]["sex"].value;
			if(gender==0)
			{
			alert("enter gender");
			document.getElementById("txtgen").focus();
			return false;
			}
			//alert(date);
			var address=document.forms["Register"]["txtAddress"].value;
			if(address==0)
			{
			alert("enter address");
			document.getElementById("txtAddress").focus();
			return false;
			}
			var phone=document.forms["Register"]["txtphone"].value;
			if(phone==0)
			{
			alert("enter phone");
			document.getElementById("txtphone").focus();
			return false;
			}
			var pic=document.forms["Register"]["txtpic"].value;
			if(pic==0)
			{
			alert("upload pic");
			document.getElementById("txtpic").focus();
			return false;
			}
			var country=document.forms["Register"]["ddlcountry"].value;
			if(country=="select")
			{
			alert("select country");
			document.getElementById("ddlcountry").focus();
			return false;
			}
			if(document.getElementById("check1").checked || document.getElementById("check2").checked || document.getElementById("check3").checked )
			{
				//alert("selected");
			}
			else
			{
				alert("select qualification");
				return false;
			}
			/*var quali=document.forms["Register"]["txtqua"].value;
			if(quali==0)
			{
			alert("enter qualification");
			document.getElementById("txtqua").focus();
			return false;
			}*/
			var pass=document.forms["Register"]["txtpass"].value;
			if(pass==0)
			{
			alert("enter password");
			document.getElementById("txtpass").focus();
			return false;
			}
			var pass1=document.forms["Register"]["txtpass1"].value;
			if(pass1==0)
			{
			alert("enter confirm password");
			document.getElementById("txtpass1").focus();
			return false;
			}
			/*var pass=document.forms["Register"]["txtphone"].value;
			if(pass==0)
			{
			alert("enter password");
			document.getElementById("txtpass").focus();
			return false;
			}*/
			}
			function funphone()
			{
				var phone=document.forms["Register"]["txtphone"].value;
			if(phone.length!=10)
			{
			document.getElementById("result").innerHTML="INVALID PHONE NUMBER";
			}
			else if(isNaN(phone))
			{
				document.getElementById("result").innerHTML="Character not allowed";
			}
			else
			{
			document.getElementById("result").innerHTML=" ";
			
			}
				//alert(phone);
			}
			
			</script>
		</head>
		<body >
		
			<div class="header">
			
			<a href="contact.html">Contact</a>
			<a class="active" href="Register.html">SignUp</a>
			<a href="signin.html">SigIn</a>
		</div>
		<h3>Student Registration</h3>
		<form action="regaction.php" onsubmit="return validate()" name="Register" method="post" enctype="multipart/form-data">
			<table align="center">
			<tr>
				<td><label>First name</label></td>
				<td><input type=text placeholder="enter" name="txtfname" id="fname"></td>
			</tr>
			<tr>
				<td><label>Last name</label></td>
				<td><input type=text placeholder=enter name="txtlname" id="lname"><br></td>
			</tr>
			<tr>
				<td><label>Dob</label></td>
				<td><input type=date  name="txtdate" id="txtdate"></td>
			</tr>
			<tr>
				<td><label>Email</label></td>
				<td><input type=email placeholder=enter name="txtemail" id="txtemail" ></td>
			</tr>
			<tr>
				<td><label>Gender</label></td>
				<td><input type=radio name=sex id="txtgen" value="Male">Male<input type=radio name=sex id="txtgen" value="Female">Female <input type=radio name=sex id="txtgen" value="Others">Others</td>
			</tr>
			<tr>
				<td>Address <br /><br /><br /></td>
				<td><textarea name="txtAddress" rows="4" cols="30" id="txtAddress"></textarea></td>
			</tr>
			<tr>
				<td><label>Phone</label></td>
				<td><input type=text placeholder=enter name="txtphone" id="txtphone" onchange="funphone()"></td>
				<td>
				<span id="result" style="color:red" ></span></td>
			</tr>
			<!--<tr>
				<td><label>Qualification</label></td>
				<td><input type=text placeholder=enter name="txtqua"></td>
			</tr>-->
			<tr>
			
				<td><label>Country</label></td>
				<td><select name="ddlcountry" id="ddlcountry">
				<option value=select >select</option>
						<option value=India >india</option>
						<option value=china >china</option>
						<option value=pakistan >pakistan</option>
					</select></td>
			</tr>
			<tr>
				<td><label>Qualification</label></td>
				<td>
				<input type=checkbox name="txtqua" value=mca id="check1" >MCA 

				<input type=checkbox name="txtqua" value=btech id="check2" >Btech 
				<input type=checkbox name="txtqua" value=mtech id="check3" >Mtech </td></td>
			</tr>
			<tr>
				<td>Upload Photo:</td>
                <td>
				<input type ="file" name="file" accept="*.*" id="file"/>
				</td>
				</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input type=password placeholder=enter name="txtpass" id="txtpass" ></td>
			</tr>
			<tr>
				<td><label>Confirm password</label></td>
				<td><input type=password placeholder=enter name="txtpass1" id="txtpass1"></td>
			</tr>
			<tr >
				<td ><center>
				<input type="submit" value="submit" name="submit" ></center></td>
				<td><input type="reset" value="Reset" name=btnrst></td>
			</tr>

			</table>
		</form>
		<div class=footer>
		</div>
	</body>
<!--required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"-->
			
</html>
