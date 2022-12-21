<?php
include("cashconnection.php");
error_reporting(0);

$name=$_GET['name'];
$query = "DELETE FROM CASH WHERE NAME ='$name'";

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