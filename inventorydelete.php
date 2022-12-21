<?php
include("connection3.php");
error_reporting(0);

$inventory=$_GET['inventory'];
$query = "DELETE FROM INVENTOR WHERE INVENTORY ='$inventory'";

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