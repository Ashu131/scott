<?php
if(isset($_POST['job_enquiry']))
{
$candidate_type	= $_POST['candidate_type'];
$fname 			= $_POST['fname'];
$lname			= $_POST['lname'];
$title			= $_POST['title'];
$state			= $_POST['state'];
$city			= $_POST['city'];
$org			= $_POST['organization'];
$mobile			= $_POST['phone'];
$customer_email = $_POST['email'];
$message 		= $_POST['message'];
$ftime			= $_POST['ftime'];
$totime			= $_POST['totime'];
$status			= $_POST['status'];

//Validate first
if(empty($fname) || empty($customer_email)  || empty($mobile) || empty($lname) || empty($candidate_type))
{
echo '<script>window.alert("Star Fields are Mandatory")</script>';
}
// if(IsInjected($visitor_email))
// {
//     echo "Bad email value!";
//     exit;
// }
$to = "Info@scottconnerhcs.com";
$subject = "Candidate submitted the form for Enquiry";
$message = '<html>
	<body>
		<div class="jumbotron text-xs-center">
			<h3>Candidate Details:</h3>
			<h5>Looking For-</h5><p>'.$candidate_type.'</p>
			<h5>First Name</h5><p>'.$fname.'</p>
			<h5>Last Name</h5><p>'.$lname.'</p>
			<h5>Current Title</h5><p>'.$title.'</p>
			<h5>State</h5><p>'.$state.'</p>
			<h5>City</h5><p>'.$city.'</p>
			<h5>Organization</h5><p>'.$org.'</p>
			<h5>Phone</h5><p>'.$mobile.'</p>
			<h5>Email</h5><p>'.$customer_email.'</p>
			<h5>Message</h5><p>'.$message.'</p>
			<h5>Time to Respond</h5><p>'.$ftime.'To'.$totime.'</p>
			<h5>Employment Status</h5><p>'.$status.'</p>
		</div>
	</body>
		  </html>';
// $email_body= "This is new from techbridge";
$header = "From:Info@scottconnerhcs.com\r\n";
$header .= "Bcc:ashutosh.21@yahoo.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";
//Send the email!
$retval = mail ($to,$subject,$message,$header);
if( $retval == true ) {
echo '<script>window.alert("Thanks For Your Enquiry...");window.location.href="index.php";</script>';
}else {
echo '<script>window.alert("Message could not be sent...")</script>';
echo '<script>window.location.href="index.php";</script>';
}
// Function to validate against any email injection attempts
// } function IsInjected($str)
// {
//   $injections = array('(\n+)',
//               '(\r+)',
//               '(\t+)',
//               '(%0A+)',
//               '(%0D+)',
//               '(%08+)',
//               '(%09+)'
//               );
//   $inject = join('|', $injections);
//   $inject = "/$inject/i";
//   if(preg_match($inject,$str))
//     {
//     return true;
//   }
//   else
//     {
//     return false;
//   }
} else {
echo "You need to submit the Enquiry Form!";

}
?>