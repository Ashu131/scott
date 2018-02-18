<!DOCTYPE html>
<html>
	<head>
		<title>Scott Conner - Human Capital Solutions|Register</title>
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
		<!-- //header -->s
		<!-- banner -->
		<div class="inner_page_agile">
			<h3>Register</h3>
			<p>Add Some Short Description</p>
		</div>
		<!--//banner -->
		<!--/w3_short-->
		<div class="services-breadcrumb_w3layouts">
			<div class="inner_breadcrumb">
				<ul class="short_w3ls"_w3ls>
					<li><a href="index.php">Home</a><span>|</span></li>
					<li>Register</li>
				</ul>
			</div>
		</div>
		<!--//w3_short-->
		<!-- /inner_content -->
		<div class="inner_content_info_agileits">
			<div class="container">
				<div class="tittle_head_w3ls">
					<h3 class="tittle three">Register Now </h3>
				</div>
				<div class="inner_sec_grids_info_w3ls">
					<div class="signin-form">
						<div class="login-form-rec">
							<form action="#" method="post">
								<input type="text" name="name" placeholder="First Name" required="">
								<input type="text" name="name" placeholder="Last Name" required="">
								<input type="email" name="email" placeholder="Email" required="">
								<input type="password" name="password" id="password1" placeholder="Password" required="">
								<input type="password" name="password" id="password2" placeholder="Confirm Password" required="">
								<select id="country13" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">Work Experience</option>
									<option value="">Fresher</option>
									<option value="">0</option>
									<option value="">1</option>
									<option value="">2</option>
									<option value="">3</option>
									<option value="">4</option>
									<option value="">5</option>
									<option value="">6</option>
									<option value="">7</option>
									<option value="">8</option>
									<option value="">9</option>
									<option value="">10</option>
									<option value="">11</option>
									<option value="">12</option>
									<option value="">13</option>
									<option value="">14</option>
									<option value="">15</option>
								</select>
								<select id="country13" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">Qualification</option>
									<option value="">Bsc</option>
									<option value="">BTech</option>
									<option value="">Mca</option>
									<option value="">BCA</option>
									<option value="">Diploma</option>
									<option value="">Other</option>
								</select>
								<input type="submit" value="Register">
							</form>
						</div>
						<p class="reg"><a href="#"> By clicking register, I agree to your terms</a></p>
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