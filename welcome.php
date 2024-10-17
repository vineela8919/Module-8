<?php
session_start();
echo "<p align='right'><a href='logout.php'>LogOut</a></p>";
echo "WELCOME ".$_SESSION['userName'];
?>
