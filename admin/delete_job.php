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

if (isset($_GET['id'])&& !empty($_GET['id'])) {
	$job_id= $_GET['id'];

	$qry= "DELETE FROM jobs_list WHERE id='$job_id'";

	$run=mysqli_query($connect, $qry);

	if ($run) {
		header('location:index.php?n=Record Deleted');
	} else {
		header('location:edit_job.php?n=Record Not Deleted');
	}
}

 ?>