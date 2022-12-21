<?php
include("connection1.php");
error_reporting(0);
?>

<html><head><title>Add Donor Details</title>
<link rel="stylesheet" href="menu.css">
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
<div class="menu-bar">
    <ul>
        <li><a href="orphan.php"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="http://localhost:8080/orphan/form1.php"><i class="fa fa-home"></i>Manage Orphan </a></li>
        <li><a href="http://localhost:8080/orphan/vieworphan.php"><i class="fa fa-pencil-square"></i>View Orphan</a></li>
        <li><a href="http://localhost:8080/orphan/form2.php"><i class="fa fa-gift"></i>Manage Donor</a></li>
        <li><a href="http://localhost:8080/orphan/display1.php"><i class="fa fa-pencil-square"></i>View Donor</a></li>
        <li><a href="http://localhost:8080/orphan/inventoryopen.php"><i class="fa fa-home"></i>Inventory</a></li>
      
        <li><a href="http://localhost:8080/orphan/display.php"><i class="fa fa-trash"></i>Edit/Delete</a></li>
        <li><a href="orphan.php"><i class="fa fa-sign-out"></i>Log Out</a></li>
    </ul>
    </div>
<br><br>
<center>
<form action="" method="POST">
<table align="center" cellspacing="15">
<tr>
<td>Donor ID<td><input type="text" placeholder="Donor Id" name="donorid" required></td></tr>
<tr>
<td>Name<td><input type="text"placeholder="Name" name="name" required></td></tr>
<tr>
<td>Gender<td>Male<input type="radio" name = "r1" value="male" required>
			Female<input type="radio" name ="r1" value="female" required></td></tr>

<tr>
<td>Age<td><input type="text" placeholder="Age" name="age" required></td></tr>

<tr>
<td>Address<td><input type="text" placeholder="Address" name="add" required></td></tr>

<tr>
<td>Phone no<td><input type="number" placeholder="mobile number" name="phoneno"></td></tr>
<tr>
<td>Email<td><input type="email"  placeholder="email" name="email"></td></tr>
<tr>
<td>Ocuupation<td><input type="text"  placeholder="Occupation" name="occupation" required></td></tr>

<tr>
<td>Income<td><input type="text"  placeholder="income" name="income" required></td></tr>



<tr><td colspan="2" align="center" ><input type="submit" id="button" name="submit"></td></tr>

</center>
</form>
</table>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
$id=$_POST['donorid'];
$name=$_POST['name'];
$gen=$_POST['r1'];
$age=$_POST['age'];
//$birth=$_POST['birth'];
$add=$_POST['add'];
$pn=$_POST['phoneno'];
$email=$_POST['email'];
$occ=$_POST['occupation'];
$income=$_POST['income'];
//$doj=$_POST['dateofjoining'];

	if($id!="" && $name!="" && $gen!="" && $age!="" && $add!="" && $pn!="" && $email!="" && $occ!="" && $income!="")
	{

$query="INSERT INTO DONOR VALUES('$id','$name','$gen','$age','$add','$pn','$email','$occ','$income')";
$data=mysqli_query($conn,$query);
if($data)
{
	//echo" Data inserted into Database";
}
	}
else
{
	echo"Failed data insert";
}

}
?>
<tr><td colspan="3" color="red" align="right-top" ><a href = "http://localhost:8080/orphan/display1.php">NEXT</a></td>
