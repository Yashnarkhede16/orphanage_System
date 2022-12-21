<?php
include("connection.php");
error_reporting(0);
?>

<html><head><title>Add orphan Details</title>
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
<body>
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
<div class="table">
<center>
<form action="" method="POST">
<table align="center" cellspacing="15">
<tr>
<td>Name<td><input type="text"placeholder="Name" name="name" required></td></tr>
<tr>
<td>Age<td><input type="text" placeholder="Age" name="age" required></td></tr>
<tr>
<td>Gender<td>Male<input type="radio" name = "r1" value='male' required>
			Female<input type="radio" name ="r1" value='female' required></td></tr>

<tr>
<td>Guardian Name<td><input type="text"  placeholder="Guardian Name" name="guardianname" required></td></tr>
<tr>
<td>Guardian Ocuupation<td><input type="text"  placeholder="Guardian Occupation" name="guardianoccupation" required></td></tr>
<tr>
<td>Address<td><input type="text" placeholder="Address" name="address" required></td></tr>
<tr>
<td>Guardian Phone<td><input type="text" placeholder="mobile number" name="guardianphone"></td></tr>
<tr>
<td>Email<td><input type="email"  placeholder="email" name="email"></td></tr>



<tr><td colspan="3" align="center" ><input type="submit" id="button" name="submit"></td></tr>
</form>
</center>
</table> 

</div>
<div class="bar">
<tr><td colspan="2" color="red" align="right-top" ><a href = "file:///C:/orphanage/menu.html">PREV</a></td>
<tr><td colspan="3" color="red" align="right-top" ><a href = "http://localhost:8080/orphan/vieworphan.php">NEXT</a></td></div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$id=$_POST['orphanid'];
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['r1'];
//$birth=$_POST['birth'];
$gn=$_POST['guardianname'];
$go=$_POST['guardianoccupation'];
$add=$_POST['address'];
$gp=$_POST['guardianphone'];
$email=$_POST['email'];
//$doj=$_POST['dateofjoining'];
	
	if($name!="" && $age!="" && $gender!="" && $gn!="" && $go!="" && $add!="" && $gp!="" && $email!="")
	{
$query="INSERT INTO STUDENT VALUES('$id','$name','$age','$gender','$gn','$go','$add','$gp','$email')";
$data=mysqli_query($conn,$query);
	
if($data)
{
	header("location:http://localhost:8080/orphan/vieworphan.php");
}
	}
else
{
	echo"Failed data insert";
}
}
?>

