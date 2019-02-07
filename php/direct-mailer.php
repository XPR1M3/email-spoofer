<!doctype html>
<html>
<head>
	<title>Direct Mailer</title>
</head>
<body>
	
	<?php

	

	
	$to      = 'angelina@jolie.com';
	$subject = 'Hey, I am sorry.';
	$message = 'I want to meet you!';
	

	
	$headers = 'From: brad@pitt.com' . "\r\n" .
	   	   	   'Reply-To: brad@pitt.com' . "\r\n" .
	    	   'X-Mailer: PHP/' . phpversion();
	
	
	
	if (mail($to, $subject, $message, $headers)) echo $headers.'<h1>Mail sent!</h1>';
	else echo '<h1>Something went wrong...</h1>';
	

    ?>
	
</body>
</html>