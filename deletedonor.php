<?php
include("connection1.php");
error_reporting(0);

$name=$_GET['name'];
$query = "DELETE FROM DONOR WHERE NAME ='$name'";

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
