<?php $root_path = '../../';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V6</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="<?php echo $root_path.'assets/css/bootstrap.min.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $root_path.'assets/css/font-awesome.min.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $root_path.'assets/css/material-design-iconic-font.min.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $root_path.'assets/css/animate.min.css';?>">	
	<link rel="stylesheet" type="text/css" href="<?php echo $root_path.'assets/css/hamburgers.min.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $root_path.'assets/css/animsition.min.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $root_path.'assets/css/select2.min.css';?>">	
	<link rel="stylesheet" type="text/css" href="<?php echo $root_path.'assets/css/daterangepicker.min.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $root_path.'assets/css/util.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $root_path.'assets/css/main.css';?>">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-15" data-validate="Enter password">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<ul class="login-more p-t-190">
						<li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>

							<a href="#" class="txt2">
								Username / Password?
							</a>
						</li>

						<li>
							<span class="txt1">
								Don’t have an account?
							</span>

							<a href="#" class="txt2">
								Sign up
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="<?php echo $root_path.'assets/js/jquery.min.js';?>"></script>
	<script src="<?php echo $root_path.'assets/js/animsition.min.js';?>"></script>
	<script src="<?php echo $root_path.'assets/js/popper.min.js';?>"></script>
	<script src="<?php echo $root_path.'assets/js/bootstrap.min.js';?>"></script>
	<script src="<?php echo $root_path.'assets/js/select2.min.js';?>"></script>
	<script src="<?php echo $root_path.'assets/js/moment.min.js';?>"></script>
	<script src="<?php echo $root_path.'assets/js/daterangepicker.min.js';?>"></script>
	<script src="<?php echo $root_path.'assets/js/countdown.min.js';?>"></script>
	<script src="<?php echo $root_path.'assets/js/main.js';?>"></script>

</body>
</html>