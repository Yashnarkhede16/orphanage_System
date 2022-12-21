<?php
include("loginconnection.php");
?>
<html>
        
<head>
            <meta charset="utf-8">
            <title>login form</title>
            <link rel="stylesheet" href="log.css"></head>
        <body>
        <table>
        <div class=login-box>
            <h1>Login Form Admin</h1>
            <form action="" method="POST">
                <div class="textbox">
                    username
                    <i class="fa fa-user"></i>
                    <input type="text" name="user">
                </div>      
                <br>
                <div class="textbox">   
                    password
                    <i class="fa fa-lock"></i>
                    <input type="password" name="pass">
                </div>
                <br>
                <center>
                <input type="submit" name="submit" value="Login"></center>
            
            </form>
        </div>
        <div class="notification">
                <div class="contents">
                    <p><a href="http://localhost:8080/orphan/orphan.php">Back</a></p>
                </div>
        </div>  
<?php
if(isset($_POST['submit']))
{
     $username=$_POST['user'];
     $password=$_POST['pass'];
     $res=mysqli_query($conn,"select* from login where username='$username' and password='$password'");
        $result=mysqli_fetch_array($res);

if($result)
{
    header("location:menu.php");
}
else
{
    echo "Invalid username or password.";
}
}

?>
       </table>
        </body>
       
</html>    