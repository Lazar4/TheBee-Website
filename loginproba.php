<?php
include('server.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="register.php">

		<label>Username</label>
		<input type="text" name="username">
		<br>
		
		<label>Password</label>
		<input type="password" name="password">
		<br>
		
		<button type="submit" name="login">Login</button>
	</form>
</body>
</html>