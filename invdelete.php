<?php
include("connection4.php");
error_reporting(0);

$inventoryname=$_GET['inventoryname'];
$query = "DELETE FROM INV WHERE INVENTORYNAME ='$inventoryname'";

$data=mysqli_query($conn,$query);

if($data)
{
	echo "<font color='green'>Record Deleted";
}
else
{
	echo "<font color='red'>Failed to Delete Record from Database";
}





?>