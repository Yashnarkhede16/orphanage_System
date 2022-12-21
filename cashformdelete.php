<?php
include("cashconnection.php");
error_reporting(0);
?>

<html><head><title>Cash Details</title>

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
<form action="" method="POST">
<table align="center" cellspacing="15">
<tr>
<td>Donor ID<td><input type="text" placeholder="donor Id" name="donorid"></td></tr>
<tr>
<td>Name<td><input type="text"placeholder="Name" name="name"></td></tr>
<tr>
<td>date<td><input type="date" placeholder="date" name="date"></td></tr>


<tr>
<td>Donation Amounts Rs<td><input type="text"  placeholder="donationamountrs" name="donationamountrs"</td></tr>
<tr>
<td>Cheque No<td><input type="number" placeholder="mobileno" name="mobileno"></td></tr>
<tr>
<td>Address<td><input type="text"  placeholder="address" name="address"></td></tr>



<tr><td colspan="2" align="center" ><input type="submit" id="button" name="submit"></td></tr>
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
<th>Donation Amount Rs</th>
<th>Mobile No</th>
<th>Address</th>
<th>Operation</th>
</tr>
</center>
</body>
</html>

<?php
include("cashconnection.php");
error_reporting(0);
$query = "select * from cash";
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
		<td>".$result['donationamountrs']."</td>
		<td>".$result['mobileno']."</td>
		<td>".$result['address']."</td>
		<td><a href='cashformdelete2.php?name=$result[name]'>delete</td>
		
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
if(isset($_POST['submit']))
{
$id=$_POST['donorid'];
$name=$_POST['name'];
$date=$_POST['date'];
$amount=$_POST['donationamountrs'];
//$birth=$_POST['birth'];
$mobileno=$_POST['mobileno'];
$address=$_POST['address'];

	if($id!="" && $name!="" && $date!="" && $amount!="" && $mobileno!="" && $address!="")
	{
$query="INSERT INTO CASH VALUES('$id','$name','$date','$amount','$mobileno','$address')";
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