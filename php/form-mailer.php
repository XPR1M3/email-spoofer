<!doctype html>
<html>
<head>
	<title>Form Mailer</title>
</head>
<body>

	<?php

	
	$fromName=$_POST['fromname'];
	$fromEmail=$_POST['fromemail'];
	$replytoName=$_POST['replytoname'];
	$replytoEmail=$_POST['replytoemail'];
	$toEmail=$_POST['to'];
	$subjectText=$_POST['subject'];
	$messageText=$_POST['message'];


	
	$fromFull 	=  $fromName . ' <'.$fromEmail.'> ';
	$replytoFull 	=  $replytoName . ' <'.$replytoEmail.'> ';
	

	
	$to      = $toEmail;
	$subject = $subjectText;
	$message = $messageText;


	
	$headers  = "From: ".$fromFull . "\r\n";
	$headers .= "Reply-To: ".$replytoFull . "\r\n";
	
	$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
	$headers .= "X-Priority: 1" . "\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	


	
	if (mail($to, $subject, $message, $headers)) echo $headers.'<h1>Mail sent!</h1>';
	else echo '<h1>Something went wrong...</h1>';
	

	?>

</body>
</html>