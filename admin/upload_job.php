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

	$qry= "INSERT into jobs_list(position_title, position_type, responsibility, requirements, skills, 							location, education, hiring_time, comments, company_name, 										employer_name, employer_email, employer_phone, street, street2, city, 							state, zip_code, country)
		   	VALUES('$title', '$type', '$rpbl', '$require', '$skills', '$location', '$edu', '$time', '$comment', '$company', '$employer', '$emp_email', '$emp_phone', '$street', '$street2', '$city', '$state', '$pincode', '$country')";

	$run=mysqli_query($connect, $qry);

	if ($run) {
		header('location:add_product.php?n=Record Inserted');
	} else {
		header('location:add_product.php?n=Record Not Inserted');
		
	}
	
}

 ?>