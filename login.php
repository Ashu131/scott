<!DOCTYPE html>
<html>
	<head>
		<title>Scott Conner - Human Capital Solutions|LogIn</title>
		<!--/tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!-- Url script -->
		<?php include_once 'url_scripts.php'; ?>
		<!--//tags -->
		<!-- Css and fonts links -->
		<?php include_once 'config.php'; ?>
		
	</head>
	<body>
		<!-- header -->
		<?php include_once 'header.php'; ?>
		<!-- //header -->
		<!-- banner -->
		<div class="inner_page_agile">
			<h3>Login</h3>
			<p>Add Some Short Description</p>
		</div>
		<!--//banner -->
		<!--/w3_short-->
		<div class="services-breadcrumb_w3layouts">
			<div class="inner_breadcrumb">
				<ul class="short_w3ls"_w3ls>
					<li><a href="index.php">Home</a><span>|</span></li>
					<li>Login</li>
				</ul>
			</div>
		</div>
		<!--//w3_short-->
		<!-- /inner_content -->
		<div class="inner_content_info_agileits">
			<div class="container">
				<div class="tittle_head_w3ls">
					<h3 class="tittle three">LogIn to your Account </h3>
				</div>
				<div class="inner_sec_grids_info_w3ls">
					<div class="signin-form">
						<div class="login-form-rec">
							<form action="#" method="post">
								<input type="email" name="email" placeholder="E-mail" required="">
								<input type="password" name="password" placeholder="Password" required="">
								<div class="tp">
									<input type="submit" value="Login">
								</div>
							</form>
						</div>
						<div class="login-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
						<p><a href="register.php"> Don't have an account?</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- footer -->
		<?php include_once 'footer.php'; ?>
		<!-- //footer -->
		<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		
		<!-- password-script -->
		<script type="text/javascript">
			window.onload = function () {
				document.getElementById("password1").onchange = validatePassword;
				document.getElementById("password2").onchange = validatePassword;
			}
			function validatePassword() {
				var pass2 = document.getElementById("password2").value;
				var pass1 = document.getElementById("password1").value;
				if (pass1 != pass2)
					document.getElementById("password2").setCustomValidity("Passwords Don't Match");
				else
					document.getElementById("password2").setCustomValidity('');
				//empty string means no validation error
			}
		</script>
		<!-- //password-script -->
		<!-- js -->
		<?php include_once 'scripts.php'; ?>
		
	</body>
</html>