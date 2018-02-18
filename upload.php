<!DOCTYPE html>
<html>
	<head>
		<title>Scott Conner - Human Capital Solutions|Upload</title>
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
			<h3>Upload</h3>
			<p>Add Some Short Description</p>
		</div>
		<!--//banner -->
		<!--/w3_short-->
		<div class="services-breadcrumb_w3layouts">
			<div class="inner_breadcrumb">
				<ul class="short_w3ls"_w3ls>
					<li><a href="index.php">Home</a><span>|</span></li>
					<li>Upload</li>
				</ul>
			</div>
		</div>
		<!--//w3_short-->
		<div id="search_form" class="search_top">
			<h2>Start your job search</h2>
			<form action="#" method="post">
				<input type="text" name="Enter Keyword(s)" placeholder="Enter Keyword(s)" required="">
				<input class="email" name="Location" type="text" placeholder="Location" required="">
				<select id="country12" onchange="change_country(this.value)" class="frm-field required">
					<option value="null"> Select Category</option>
					<option value="city">Banking</option>
					<option value="city">Finance</option>
					<option value="city">It</option>
					<option value="city">Specialists</option>
					
				</select>
				<input type="submit" value="Find Jobs">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- /inner_content -->
		<div class="candidate_cv">
			<div class="tittle_head_w3ls">
				<h3 class="tittle two">Candidate Cv</h3>
			</div>
			<div class="inner_sec_grids_info login-form">
				<form action="#" method="post">
					<div class="col-md-6 form-left">
						<div class="form-inputs email">
							<p>Full name</p>
							<i class="fa fa-user" aria-hidden="true"></i>
							<input type="text" name="Name" placeholder="" required="" />
						</div>
						<div class="form-inputs name">
							<p>Email</p>
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input type="email" name="Email" placeholder="" required="" />
						</div>
						<div class="form-inputs name">
							<p>Phone</p>
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input type="text" name="Phone" placeholder="" required="" />
						</div>
					</div>
					<div class="col-md-6 form-right">
						<div class="form-inputs name">
							<p>Comment</p>
							<i class="fa fa-comment" aria-hidden="true"></i>
							<textarea name="Message" placeholder="" required=""></textarea>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-inputs">
						<p>Specify your current employment status</p>
						<ul>
							<li>
								<input type="radio" id="a-option" name="selector1">
								<label for="a-option">Employed </label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="b-option" name="selector1">
								<label for="b-option">Unemployed</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="c-option" name="selector1">
								<label for="c-option">Self-Employed</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="d-option" name="selector1">
								<label for="d-option">Student</label>
								<div class="check"></div>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="form-inputs upload">
						<p>Upload your resume</p>
						<input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />
						<div id="filedrag">Upload</div>
					</div>
					<input type="submit" value="Submit Cv">
				</form>
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