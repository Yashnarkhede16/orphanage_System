<html>
<head>
<title>display record</title>
<link rel="stylesheet" href="menu.css">
</head>

<body background="img2.jpg">
<center>
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
<table border="2">
<tr>
<th>Orphan ID</th>
<th>Name</th>
<th>Age</th>
<th>Gender</th>
<th>Guardian Name</th>
<th>Guardian Occupation</th>
<th>Address</th>
<th>Guardian Phone</th>
<th>Email</th>
<th>Edit/Update</th>
<th>Delete</th?
</tr>
<?php
include("connection.php");
error_reporting(0);
$query = "select * from student";
$data = mysqli_query($conn,$query);
$total= mysqli_num_rows($data);

if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['orphanid']."</td>
		<td>".$result['name']."</td>
		<td>".$result['age']."</td>
		<td>".$result['gender']."</td>
		<td>".$result['guardianname']."</td>
		<td>".$result['guardianoccupation']."</td>
		<td>".$result['address']."</td>
		<td>".$result['guardianphone']."</td>
		<td>".$result['email']."</td>
		<td><a href='update.php?orphanid=$result[orphanid]&name=$result[name]&age=$result[age]&r1=$result[gender]&guardianname=$result[guardianname]&guardianoccupation=$result[guardianoccupation]&address=$result[address]&guardianphone=$result[guardianphone]&email=
		$result[email]'><input type='submit' value='Edit/update'id='editbtn'>
		<td><a href='delete.php?name=$result[name]' onclick='return checkdelete()'><input type='submit' value='Delete' id='deletebtn'></td>
		</tr>
		";
	}
}
else
{
	echo "No records found";
}
?>
</table>
<script>
	function checkdelete()
	{
		return confirm('Are you sure you want to Delete this Record.');
	}
</script>
</center>
<center><tr><td colspan="3"align="center" ><a href = "http://localhost:8080/orphan/form1.php">PREV</a></td></center>.....
<center><tr><td colspan="3"align="center" ><a href = "file:///C:/orphanage/menu.html">NEXT</a></td></center>
</body>
</html>

