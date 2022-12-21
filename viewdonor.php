<html>
<head>
<title>display record</title>
<link rel="stylesheet" href="menu.css">
</head>
<body background ="img4.jpg">
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
<center>
<table border="3">
<tr>
<th>Donor ID</th>
<th>Name</th>
<th>Gender</th>
<th>Occupation</th>
<th>Address</th>
<th>Aadhar card</th>
<th>Mobile No.</th>
<th>Email</th>
<th>username</th>
</tr>
</center>

<?php
include("connection.php");
error_reporting(0);
$query = "select * from signup";
$data = mysqli_query($conn,$query);
$total= mysqli_num_rows($data);

//echo $result['orphanid']." ".$result['name']." ".$result['age']." ".$result['gender']." ".$result['guardianname']." ".$result['guardianoccupation']." ".$result['address']." ".$result['guardianphone']." ".$result['email'];
//echo "$total";

if($total!=0)
{
	//$result = mysqli_fetch_assoc($data);
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['donorid']."</td>
		<td>".$result['name']."</td>
		<td>".$result['gender']."</td>
		<td>".$result['occupation']."</td>
		<td>".$result['address']."</td>
		<td>".$result['aadharcard']."</td>
		<td>".$result['mobileno']."</td>
		<td>".$result['email']."</td>
		<td>".$result['username']."</td>
		</td>
		";
	}
}
else
{
	echo "No records found";
}
?>
</table>
<tr><td colspan="3" color="red" align="right-top" ><a href = "http://localhost:8080/orphan/display.php">NEXT</a></td>
</body>
</html>

