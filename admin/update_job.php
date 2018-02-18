<?php 

session_start();
include 'config.php';

//Session Check
try {
if (!isset($_SESSION['scott-admin'])) {
header('Location:login.php');
}
} catch (Exception $e) {
echo $e;
}

if (isset($_POST['submit'])) {
	$title		= $_POST['position_title'];
	$type		= $_POST['position_type'];
	$rpbl		= $_POST['responsibility'];
	$require	= $_POST['requirements'];
	$skills		= $_POST['skills'];
	$location 	= $_POST['location'];
	$edu		= $_POST['education'];
	$time		= $_POST['hiring_time'];
	$comment	= $_POST['comments'];
	$company	= $_POST['company_name'];
	$employer	= $_POST['employer_name'];
	$emp_email	= $_POST['employer_email'];
	$emp_phone	= $_POST['employer_phone'];
	$street		= $_POST['street'];
	$street2	= $_POST['street2'];
	$city		= $_POST['city'];
	$state		= $_POST['state'];
	$pincode	= $_POST['zip_code'];
	$country	= $_POST['country'];
	$id			= $_POST['job_id'];

	$qry= "UPDATE jobs_list SET 
			position_title	='$title', 
			position_type	='$type', 
			responsibility	='$rpbl', 
			requirements	='$require', 
			skills			='$skills', 
			location		='$location', 
			education		='$edu', 
			hiring_time		='$time', 
			comments		='$comment', 
			company_name	='$company', 
			employer_name	='$employer', 
			employer_email	='$emp_email', 
			employer_phone	='$emp_phone', 
			street			='$street', 
			street2			='$street2', 
			city			='$city', 
			state			='$state', 
			zip_code		='$pincode', 
			country			='$country'
		   WHERE 
		    id				='$id'";

	$run=mysqli_query($connect, $qry);
// echo $qry;
	if ($run) {
		header('location:edit_job.php?id='.$id.'&n=Record Updated');
		
	} else {
		header('location:edit_job.php?id='.$id.'&n=Record Not Updated');
		
		
	}
	
}

 ?>