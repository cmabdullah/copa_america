<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style >
			body{
	background: url(fbl-copam2016-bra-per.jpg) no-repeat 50% 50% fixed;
	background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   -webkit-background-size: cover;
}
.main {
	width: 560px; 
	height: 120px; 
	margin: 25px auto; 
	background: url(pt.png); 
	color: #ddd;padding: 15px
}
	</style>
</head>
<body>



<?php
session_start();
if(isset($_POST['bttLogin'])){
	require 'connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result = mysqli_query($con, 'select * from admin_data where username="'.$username.'" and password= "'.$password.'"');
	if(mysqli_num_rows($result)==1){
		$_SESSION['username'] = $username;
		header('location: admin_panel.php');// header location shift to logout page
	}
	else
		echo "Account invalid";
}
if (isset($_GET['logout'])){
	session_unregister('username');
}
?>







<!--
<br>
<div align="center"><img class="copa-logo" src="logo.png"></div>
<br><br><br>

<div align="center" class="main"><br>
<form method="post">
	<table cellspacing="2" cellpadding="2" border="0">
	<tr>
		<td>Username</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password"></td>
	</tr>

		<tr>
		<td>&nbsp;</td>
		<td><input type="submit"  value="Login"></td>
	</tr>
	</table>
</form>
</div>

-->

<br>
<div align="center"><img class="copa-logo" src="logo.png"></div>
<br><br>

<div align="center"  class="main"> <br>
<form method="post">
	<table cellspacing="2" cellpadding="2" border="0">
	<tr>
		<td>Username</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password"></td>
	</tr>
		<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="bttLogin" value="Login"></td>
	</tr>
	</table>
</form>
</div>

</body>
</html>







