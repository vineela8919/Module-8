<?php
if(isset($_POST['login']))
{
$server = "localhost";
$user = "root";
$password = "";
$db = "test";
$con = new mysqli($server,$user,$password,$db);
$user = $_POST['userName'];
$password = $_POST['password'];
$remember = $_POST['remember'];
$sql = "select * from users where User_Name='$user' and Password='$password'";
$rs = $con->query($sql);
if ($rs->num_rows > 0)
{
session_start();
$_SESSION['userName'] = $user;
$_SESSION['password'] = $password;
if(isset($_POST['remember']))
{
setcookie("userName", $user, time()+60*60*7);
setcookie("password", $password, time()+60*60*7);
header("location: welcome.php");
}
}
else
{
echo "Either User Name or Password is INVALID !"."<br>"."<a 
href='login.php'>Click here</a> to try again";
}
}
else {}
?>
