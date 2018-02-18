<?php 
include 'admin/config.php';

$qry="SELECT * FROM jobs_list ORDER BY created_at";
$run=mysqli_query($connect, $qry);


 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Scott Conner - Human Capital Solutions|Single</title>
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
			<h3>Job Detail</h3>
			<p>Find Your Desired Job</p>

		</div>
		<!--//banner -->
		<!--/w3_short-->
		<div class="services-breadcrumb_w3layouts">
			<div class="inner_breadcrumb">

				<ul class="short_w3ls"_w3ls>
					<li><a href="index.php">Home</a><span>|</span></li>
					<li>Job Detail</li>
				</ul>
			</div>
		</div>
		<!--//w3_short-->
		<!-- /inner_content -->
	<div class="inner_content_info_agileits">
			<div class="container">
				<div class="tittle_head_w3ls">
					<h3 class="tittle">Some More Info </h3>
				</div>
				<div class="inner_sec_grids_info_w3ls">
					<div class="col-md-8 job_info_left">
						<div class="single-left1">
							<img src="images/banner3.jpg" alt=" " class="img-responsive" />
							<h3>Sed ut perspiciatis unde omnis iste natus error sit facilisis erat posuere erat</h3>
							<ul>
								<li><span class="fa fa-user" aria-hidden="true"></span><a href="#">Michael Smith</a></li>
								<li><span class="fa fa-tag" aria-hidden="true"></span><a href="#">5 Tags</a></li>
								<li><span class="fa fa-envelope-o" aria-hidden="true"></span><a href="#">5 Comments</a></li>
							</ul>
							<p>
								paragraph
							</p>
						</div>
					</div>
				</div>
					
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!-- //inner_content -->
		<!-- footer -->
		<?php include_once 'footer.php'; ?>
		<!-- //footer -->
		<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<!-- js -->
		<?php include_once 'scripts.php'; ?>
		
	</body>
</html>