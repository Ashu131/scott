<?php
if(isset($_POST['job_enquiry']))
{
$candidate_type	= $_POST['candidate_status'];
$name 			= $_POST['candidate_name'];
$email			= $_POST['candidate_email'];
$phone			= $_POST['candidate_phone'];
$comment		= $_POST['candidate_comment'];


//Validate first
if(empty($candidate_type) || empty($name)  || empty($email) || empty($phone) || empty($comment))
{
echo '<script>window.alert("Star Fields are Mandatory")</script>';

}

// File Upload Handle
if (isset($_FILES['candidate_cv'])) {

$filetemp	=	$_FILES['candidate_cv']['tmp_name'];
$file		=	$_FILES['candidate_cv']['name'];
$fileName	=	time()."_".$file;
$fileloc	=	"resumes/".$fileName;
}
move_uploaded_file($filetemp, $fileloc);

$to = "Info@scottconnerhcs.com";
$subject = "Candidate submitted the form for Enquiry";
$message = '<html>
	<body>
		<div class="jumbotron text-xs-center">
			<h3>Candidate Details:</h3>
			<h5>Employment Status: </h5><p>'.$candidate_type.'</p>
			<h5>Full Name: </h5><p>'.$name.'</p>
			<h5>Email: </h5><p>'.$email.'</p>
			<h5>Mobile: </h5><p>'.$phone.'</p>
			<h5>Message: </h5><p>'.$comment.'</p>
			<a href="http://scottconnerhsc.com/resumes/'.$fileName.'" class="btn btn-primary">Download</a>
			
		</div>
	</body>
		  </html>';

$header = "From:Info@scottconnerhcs.com\r\n";
$header .= "Bcc:ashutosh.21@yahoo.com,vikasjha7911@live.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);
if( $retval == true ) {
echo '<script>window.alert("Thanks For Your Enquiry...");window.location.href="index.php";</script>';
}else {
echo '<script>window.alert("Message could not be sent...")</script>';
echo '<script>window.location.href="index.php";</script>';
}

} else {
echo "You need to submit the Enquiry Form!";

}
?>