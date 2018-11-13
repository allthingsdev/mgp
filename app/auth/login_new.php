<?php $root_path = '../../';?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V6</title>
	<style type="text/css">

	.loginForm{
		margin: auto;
	}

	</style>
</head>
<body>
	<div class="loginForm">
	<form action="validate_login.php" method="post">
  		First name:<br>
  			<input type="text" name="firstname" value=""><br>
  		Last name:<br>
  			<input type="text" name="lastname" value=""><br><br>
  		<input type="submit" value="Submit">
	</form>
	<br><br>
  		<a class="button" href="register_new.php">Register</a>
	</div>
</body>
</html>