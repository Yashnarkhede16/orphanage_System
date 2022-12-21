<?php
include("connection4.php");
error_reporting(0);
?>

<html><head><title>Inventory Details</title>
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
<body background="sky.jpg">
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
<center>
<form action="" method="POST">
<table align="center" cellspacing="15">

<tr>
<td>Inventory Name<td><input type="text"placeholder="inventoryname" name="inventoryname" ></td></tr>
<tr>
<td>available no.<td><input type="text" placeholder="availableno" name="availableno"></td></tr>


<tr>
<td>wantedno<td><input type="text"  placeholder="wantedno" name="wantedno"></td></tr>


<tr><td colspan="2" align="center" ><input type="submit" id="button" name="submit"></td></tr>
</center>
</form>
</table>
</body>
</html>

<html>
<head>
<title>Add Inventory</title>
<body>
<center>
<table border="2">
<tr>
<th>Add Inventory</th>
<th>Available No</th>
<th>Wanted No</th>
<th>Operation</th>
</tr>
<?php
include("connection4.php");
error_reporting(0);
$query = "SELECT * FROM `inv`";
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
		<td>".$result['wantedno']."</td>
		<td><a href='invdelete.php?inventoryname=$result[inventoryname]'>delete</a></td>
		";
	}
}
else
{
	echo "No records found";
}
?>
</table>
</center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$inventoryname=$_POST['inventoryname'];
$availableno=$_POST['availableno'];
$wantedno=$_POST['wantedno'];
		if($inventoryname!="" && $availableno!="" && $wantedno!="")
	{


$query="INSERT INTO INV VALUES('$inventoryname','$availableno','$wantedno')";
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