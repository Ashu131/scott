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
		<!-- <div class="inner_page_agile">
			<h3>Current Openings</h3>
			<p>Find Your Desired Job</p>

		</div> -->
		<!--//banner -->
		<!--/w3_short-->
		<div class="services-breadcrumb_w3layouts">
			<div class="inner_breadcrumb">

				<ul class="short_w3ls"_w3ls>
					<li><a href="index.php">Home</a><span>|</span></li>
					<li>Current Openings</li>
				</ul>
			</div>
		</div>
		<!--//w3_short-->
		<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container-fluid">
			<!-- candidate form -->
				<?php include_once 'candidate_form.php'; ?><br>
			<!-- //candidate form -->
			<div class="tittle_head_w3ls">
				<h3 class="tittle">Find Your Job </h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
					<?php while ($result= mysqli_fetch_assoc($run)) { ?>
				<div class="col-md-6 job_info_left">
						<div class="panel panel-default" >
							<div class="panel-heading">
								<?php echo $result['position_title']; ?>
							</div>
								<div class="panel-body">
									<!-- <div class="date">03<span>Nov</span></div> -->
									<div class="date_desc">
										<h6 class="title"><a href="#"><?php echo $result['company_name']; ?></a></h6>
										<span class="meta"><?php echo $result['location']; ?></span>
									</div>
									<p class="description"><?php echo $result['requirements']; ?></p>
									<div class="read"><a href="job_detail.php?job_id='<?php echo $result['id']; ?>'" class="read-more">Read More</a>
									</div>
								</div>
						</div>
						
				</div>
						<?php } ?>
			</div>
			<div class="clearfix"></div>
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