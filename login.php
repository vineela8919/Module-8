<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<style type="text/css">
*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: "sans-serif";
}
body{
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
background: darksalmon;
}
</style>
</head>
<body>
<form method="post" action="validate.php">
<table>
<tr>
<td colspan=2>
<input class="input_box" type="textbox" name="userName" 
placeholder="User ID" id="userName_ID">
</td>
</tr>
<tr>
<td colspan="2">
<input type="Password" name="password" placeholder="Password" 
id="password_ID" class="input_box">
</td>
</tr>
<tr>
<td>
<input type="checkbox" name="remember" value="1">
</td>
<td>
Remember Me
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="login" name="login">
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_COOKIE['userName']) and isset($_COOKIE['password']))
{
$un = $_COOKIE['userName'];
$pass = $_COOKIE['password'];
echo "<script>
document.getElementById('userName_ID').value = '$un';
document.getElementById('password_ID').value = '$pass';
</script>";
}
?>
