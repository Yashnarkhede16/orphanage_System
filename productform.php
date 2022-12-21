<?php
include("productconnection.php");
error_reporting(0);
?>

<html><head><title>Product Details</title>

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
<body background="sky.jpg">
<br><br>
<form>
<table align="center" cellspacing="15">
<tr>
<td>Donor ID<td><input type="text" placeholder="donor Id" name="donorid"></td></tr>
<tr>
<td>Name<td><input type="text"placeholder="Name" name="name"></td></tr>
<tr>
<td>date<td><input type="date" placeholder="date" name="date"></td></tr>


<tr>
<td>inventory<td><input type="text"  placeholder="inventory" name="inventory"><td></tr>
<tr>
<td>Wanted No<td><input type="number" placeholder="wantedno" name="wantedno"></td></tr>
<tr>
<td>No of Donation<td><input type="text"  placeholder="noofdonation" name="noofdonation"></td></tr>



<tr><td colspan="2" align="center"><input type="submit" id="button" name="submit"></td></tr>
</form>
</table>
</body>
</html>

<html>
<head>
<title>Record Ammount</title>
</head>
<body background="sky2.jpg">
<center>
<table border="2">
<tr>
<th>Donor Id</th>
<th>Name</th>
<th>Date</th>
<th>Inventory</th>
<th>Wanted No</th>
<th>No of Donation</th>
</tr>
</center>
</body>
</html>

<?php
include("productconnection.php");
error_reporting(0);
$query = "select * from product";
$data = mysqli_query($conn,$query);
$total= mysqli_num_rows($data);

if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['donorid']."</td>
		<td>".$result['name']."</td>
		<td>".$result['date']."</td>
		<td>".$result['inventory']."</td>
		<td>".$result['wantedno']."</td>
		<td>".$result['noofdonation']."</td>
		
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

<?php

$id=$_GET['donorid'];
$name=$_GET['name'];
$date=$_GET['date'];
$inventory=$_GET['inventory'];
//$birth=$_GET['birth'];
$wantedno=$_GET['wantedno'];
$noofdonation=$_GET['noofdonation'];

$query="INSERT INTO PRODUCT VALUES('$id','$name','$date','$inventory','$wantedno','$noofdonation')";
$data=mysqli_query($conn,$query);
if($data)
{
	//echo" Data inserted into Database";
}
else
{
	echo"Failed data insert";
}
?>