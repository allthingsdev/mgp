<?php $root_path = '../../';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V6</title>
	<style type="text/css">
	.button {
        display: block;
        width: 115px;
        height: 25px;
        background: #4E9CAF;
        padding: 10px;
        text-align: center;
        border-radius: 5px;
        color: white;
        font-weight: bold;
    }
	</style>
</head>
<body>
	
	<form action="validate_register.php" method="post">
  		First name:<br>
  			<input type="text" name="firstname" value=""><br>
  		Last name:<br>
  			<input type="text" name="lastname" value=""><br><br>
  		User name:<br>
  			<input type="text" name="username" value=""><br><br>
  		Password:<br>
  			<input type="password" name="password" value=""><br>
  		Confirm Password:<br>
  			<input type="password" name="confirmpassword" value=""><br><br>
  			
  		<input type="submit" value="Submit">
	</form>
		<br><br>
  		<a class="button" href="login_new.php">Login</a>
</body>
</html>