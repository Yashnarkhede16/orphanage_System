<?php
include("connection3.php");
error_reporting(0);
?>

<html><head><title>Inventory</title>
<link rel="stylesheet" href="menu.css">
<center>
<style>
table
{
	color:black;
}

#btn
{
	
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(Mother.jpg);
    background-position: center;
    background-size: auto;
    overflow-x: hidden;
    position: relative;

background-color:green;	
color:red;
height:35px;
width:100px;
border-radius:25px;
}
</style>
</head>
<body background="sky2.jpg">
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
<form action="" method="POST">
<table cellspacing="15">

<tr>
<td> Create Inventory<td><input type="text" placeholder="Name" name="inventor"></td></tr>

<tr><td colspan="2" align="center" ><input type="submit" id="button" name="submit"></td></tr>
</form>
</table>
</body>
</html>

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
</center>
</html>

<?php
if(isset($_POST['submit']))
{
$inventor=$_POST['inventor'];
	if($inventor!="")
	{


$query="INSERT INTO INVENTOR VALUES('$inventor')";
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