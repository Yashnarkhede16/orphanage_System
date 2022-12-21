<html>
<head>
<title>Add Inventory</title>
<body background="background.jpg">
<table border="2">
<tr>
<th>Add Inventory</th>
<th>Available No</th>
<th>Wasted No</th>

</tr>
<?php
include("connection4.php");
error_reporting(0);
$query = "select * from inv";
$data = mysqli_query($conn,$query);
$total= mysqli_num_rows($data);

if($total!=0)
{
	//$result = mysqli_fetch_assoc($data);
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['inventoryname']."</td>
		<td>".$result['availableno']."</td>
		<td>".$result['wantedno']."</td></tr>
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