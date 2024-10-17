<?php
session_start();
echo $_SESSION['userName'].", you successfully log out !"."<br>"."<a href='login.php'>Click 
here</a> to LogIN again";
session_destroy();
?>
