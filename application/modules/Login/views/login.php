<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/logo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_form/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_form/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_form/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_form/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_form/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_form/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_form/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_form/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_form/css/main.css">
<!--===============================================================================================-->
	<style>
		.login100-form-btn
		{
			background-color: white;
			color:black;
			border:1px solid #08f;
			-webkit-box-shadow:none;
			box-shadow: none;
		}
		.login100-form-btn:hover
		{
			background-color: #0af;
			color:white;
			border:none;
			transition: 0.5s;
		}
		.input100:hover, .input100:hover
		{
			border-bottom: 1px solid #0af;
		}
		.p-t-85, .p-b-20
		{
			padding: 0px;
		}
		.p-t-190
		{
			padding-top: 10px;
		}
	</style>
</head>
<body>
	<form name="hiddenForm">
		<input type="hidden" name="status" id="status" value="<?php echo $this->nativesession->get('alert'); ?>">
	</form>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" method="post" action="<?php echo base_url(); ?>Login/entry">
					<span class="login100-form-avatar">
						<img src="<?php echo base_url(); ?>assets/logo.png" alt="AVATAR">
					</span>
					<span class="login100-form-title p-b-20 m-t-20">
						LOGIN
					</span>
					<div class="wrap-input100 validate-input m-t-50 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="username" autocomplete="off">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password" autocomplete="off">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<input class="input100" type="hidden" name="time" value="<?php echo date('h:s:i'); ?>">
						<input class="input100" type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/login_form/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/login_form/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/login_form/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>assets/login_form/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/login_form/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/login_form/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/login_form/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/login_form/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/login_form/js/main.js"></script>

	<script type="text/javascript">
		function modal()
	 	{
	 		var status = document.getElementById("status").value;
	 		if(status == '1')
	 		{
	 			status = '1';
	 		}
	 		if(status == '0')
	 		{
	 			if(confirm("Wrong Username/Password! Not an Admin? Go to User's Page!"))
	 			{
	 				window.location.assign("<?php echo base_url(); ?>Users/index")
	 			}
	 		}
	 	}
	</script>
</body>
</html>