<html>
<head>
<title>display record</title>
<link rel ="stylesheet" href="menu.css">
<body background ="sky2.jpg">
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
<table border="2">
<tr>
<th>Donor Id</th>
<th>Name</th>
<th>Gender</th>
<th>Age</th>
<th>Address</th>
<th>Phone No</th>
<th>Email</th>
<th>Occupation</th>
<th>Income</th>
<th>Operation</th>
</tr>
</center>
<?php
include("connection1.php");
error_reporting(0);
$query = "SELECT * FROM donor";
$data = mysqli_query($conn,$query);
$total= mysqli_num_rows($data);

if($total!=0)
{
	//$result = mysqli_fetch_assoc($data);
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['donorid']."</td>
		<td>".$result['name']."</td>
		<td>".$result['gen']."</td>
		<td>".$result['age']."</td>
		<td>".$result['add']."</td>
		<td>".$result['pn']."</td>
		<td>".$result['email']."</td>
		<td>".$result['occ']."</td>
		<td>".$result['income']."</td>
		<td><a href='deletedonor.php?name=$result[name]'>delete</td>
		";
	}
}
else
{
	echo "No records found";
}
?>
</table>
</body>
</html>