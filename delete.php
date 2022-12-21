<?php
include("connection.php");
error_reporting(0);

$name=$_GET['name'];
$query = "DELETE FROM STUDENT WHERE NAME ='$name'";

$data=mysqli_query($conn,$query);

if($data)
{
	echo "<script>alert('record deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:8080/orphan/display.php">
	<?php
}
else
{
	echo "Failed to Delete Record from Database";
}
?>