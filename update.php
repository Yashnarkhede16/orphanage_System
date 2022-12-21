<?php
include("connection.php");
error_reporting(0);
$orphanid=$_GET['orphanid'];
$name=$_GET['name'];
$age=$_GET['age'];
$gender=$_GET['r1'];

$guardianname=$_GET['guardianname'];
$guardianoccupation=$_GET['guardianoccupation'];
$add=$_GET['address'];
$guardianphone=$_GET['guardianphone'];
$email=$_GET['email'];



?>


<html><head><title>Add orphan Details</title>

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
<form action ="" method="GET">
<table align="center" cellspacing="15">
<tr>
<td>Orphan ID</td><td><input type="text" value="<?php echo "$orphanid" ?>" name="orphanid" required></td></tr>
<tr>
<td>Name</td><td><input type="text" value="<?php echo "$name" ?>" name="name" required></td></tr>
<tr>
<td>Age</td><td><input type="text" value="<?php echo "$age" ?>" name="age" required></td></tr>
<tr>
<td>Gender</td>
<td>		Male<input type="radio" name = "r1" value="male" required
			<?php
				if($gender == "male")
				{
					echo "checked";
				}
			?>
			>
			Female<input type="radio" name ="r1" value="female" required
			<?php
				if($gender == "female")
				{
					echo "checked";
				}
			?>
			></td></tr>

<tr>
<td>Guardian Name</td><td><input type="text"value="<?php echo "$guardianname"?>" name="guardianname" required></td></tr>
<tr>
<td>Guardian Ocuupation</td><td><input type="text" value="<?php echo "$guardianoccupation"?>" name="guardianoccupation" required></td></tr>
<tr>
<td>Address</td><td><input type="text" value="<?php echo "$add"?>" name="address" required></td></tr>
<tr>
<td>Guardian Phone</td><td><input type="text" value="<?php echo "$guardianphone"?>" name="guardianphone"></td></tr>
<tr>
<td>Email</td><td><input type="email"  value="<?php echo "$email"?>" name="email"></td></tr>



<tr><td colspan="2" align="center" ><input type="submit" id="button" name="submit" value="update Details"></td></tr>
</form>
</table> 
<tr><td colspan="3" color="red" align="right-bottom" ><a href = "file:///C:/orphanage/menu.html">PREV</a></td> ....
<tr><td colspan="3" color="red" align="right-bottom" ><a href = "http://localhost:8080/orphan/vieworphan.php">NEXT</a></td>
</body>
</html>

<?php
if($_GET['submit'])
{
		$orphanid=$_GET['orphanid'];
		$name=$_GET['name'];
		$age=$_GET['age'];
		$gender=$_GET['r1'];

		$guardianname=$_GET['guardianname'];
		$guardianoccupation=$_GET['guardianoccupation'];
		$add=$_GET['address'];
		$guardianphone=$_GET['guardianphone'];
		$email=$_GET['email'];
$query="UPDATE STUDENT SET orphanid='$orphanid',name='$name',age='$age',gender='$gender',guardianname='$guardianname',guardianoccupation='$guardianoccupation',
address='$add',guardianphone='$guardianphone',email='$email' WHERE orphanid='$orphanid'";
$data = mysqli_query($conn,$query);

if($data)
{
	echo"<script>alert('record updated')</script>";
	?>
	<META HTTP-EQUIV="refresh" CONTENT="0; URL=http://localhost:8080/orphan/display.php">
	<?php
}

	echo"Failed to update record";
}

?>