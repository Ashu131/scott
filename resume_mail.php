<?php 

if (isset($_POST['submit_resume'])) {

$filetemp	=	$_FILES['resume']['tmp_name'];
$file		=	$_FILES['resume']['name'];
$fileName	=	time()."_".$file;
$fileloc	=	"resumes/".$fileName;

;
$fileMove=move_uploaded_file($filetemp, $fileloc);

if ($fileMove) {

$to = "Info@scottconnerhcs.com";
$subject = "Candidate Uploaded their CV";
$message = '<html>
	<body>
		<div class="jumbotron text-xs-center">
			<h3>Candidate Details:</h3>
			<h5>Filename-</h5><p>'.$fileName.'</p>
			<h5>Download File from here:</h5>
			<a href="http://scottconnerhsc.com/resumes/'.$fileName.'" class="btn btn-primary">Download</a>
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
echo '<script>window.alert("Thanks For Uploading Your CV...");window.location.href="index.php";</script>';
}else {
echo '<script>window.alert("File could not be uploaded...")</script>';
echo '<script>window.location.href="index.php";</script>';
}

}

}
 ?>