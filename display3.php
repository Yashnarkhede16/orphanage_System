<html>
<head>
<title>Inventory</title>
<body>
<table border="2">
<tr>
<th>Add Inventory</th>
<th>Operation</th>
</tr>
<?php
include("connection3.php");
error_reporting(0);
$query = "SELECT * FROM INVENTOR";
$data = mysqli_query($conn,$query);
$total= mysqli_num_rows($data);


if($total!=0)
{
	//$result = mysqli_fetch_assoc($data);
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['inventory']."</td>
		
		<td><a href='inventorydelete.php?inventory=$result[inventory]'>delete</td>
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