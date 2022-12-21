<html>
<head>
<title>display record</title>

</head>
<body background ="img4.jpg">

<center>
<table border="3">
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
</tr>
</center>

<?php
include("connection.php");
error_reporting(0);
$query = "select * from student";
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
		<td>".$result['orphanid']."</td>
		<td>".$result['name']."</td>
		<td>".$result['age']."</td>
		<td>".$result['gender']."</td>
		<td>".$result['guardianname']."</td>
		<td>".$result['guardianoccupation']."</td>
		<td>".$result['address']."</td>
		<td>".$result['guardianphone']."</td>
		<td>".$result['email']."</td>
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

