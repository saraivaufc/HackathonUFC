<?php

	$name =$_POST["name"];
	$message =$_POST["message"]; 
	$email =$_POST["email"];

	$to = 'saraiva.ufc@gmail.com';
	$subject = 'Hackaton UFC 2015';
	$message = 'hello';
	$headers = 'From: webmaster@example.com' . "\r\n" . 'Reply-To: saraiva.ufc@gmail.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);

	header('location: index.html');  
?>