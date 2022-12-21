<?php
include("connection5.php");
error_reporting(0);
?>

<html><head><title>Donor Sign up Details</title>


<style>
table
{
	color:black;
}

#btn
{
background-color:green;	
color:white;
height:35px;
width:100px;
border-radius:25px;
}
</style>
</head>
<body background="background.jpg">
<br><br>
<form action="" method="POST">
<table align="center" cellspacing="15">
<tr>
<td>Name<td><input type="text" placeholder="Name" name="name" required></td></tr>
<tr>

<td>Gender<td><input type="radio" name = "r1" value="male" required>Male
			<input type="radio" name ="r1" value="female" required>Female</td></tr>
<tr>
<td>Occupation<td><input type="text"  placeholder="Occupation" name="occupation" required></td></tr>
<tr>
<td>Address<td><input type="text"  placeholder="Address" name="address" required></td></tr>
<tr>
<td>Aadhar Card<td><input type="text" placeholder="Aadhar Card" name="aadharcard" required></td></tr>
<tr>
<td>Mobile No.<td><input type="number" placeholder="mobile number" name="mobileno"></td></tr>
<tr>
<td>Email<td><input type="email"  placeholder="email" name="email"></td></tr>
<tr>
<td>OTP<td><input type="number" placeholder="otp" name="otp"></td></tr>
<tr>
<td>User Name<td><input type="text"  placeholder="username" name="username"></td></tr>
<tr>
<td>Password<td><input type="password"  placeholder="password" name="password"></td></tr>
<tr>
<td>Confirm Password<td><input type="password"  placeholder="confirm password" name="confirmpassword"></td></tr>

<tr><td colspan="2" align="center" ><input type="submit" id="button" name="submit"></td></tr>
<tr><td><button class="btn" type="button" name="" value="Log In"><a href="signup2.php">Already Registerd ?</a></td></tr>
</form>
</table>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$donorid=$_POST['donorid'];
$name=$_POST['name'];
$gender=$_POST['r1'];
//$birthdate=$_POST['birthdate'];
$occupation=$_POST['occupation'];
$address=$_POST['address'];
$aadharcard=$_POST['aadharcard'];
$mobileno=$_POST['mobileno'];
$email=$_POST['email'];
//$doj=$_POST['dateofjoining'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
	
	if($name!="" && $gender!="" && $occupation!="" && $address!="" 
    && $aadharcard!="" && $mobileno!="" && $email!="" && $username!="" && $password!="" && $confirmpassword!="")
    {
$query="INSERT INTO SIGNUP VALUES('$donorid','$name','$gender','$occupation','$address',
'$aadharcard','$mobileno','$email' ,'$username','$password','$confirmpassword')";
$data=mysqli_query($conn,$query);
	
if($data)
{
	header("location:http://localhost:8080/orphan/signup2.php");
}
	}
else
{
	echo"Failed data insert";
}
}
?>

