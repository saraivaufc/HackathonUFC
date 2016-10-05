<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$message_html = '
		<html>
			<head>
				<title>Hackathon - Contato</title>
			</head>
			<body>
				<h3>Meu nome é ' . $name . '</h3>
				<p>' . $message . '</p>
				<p>
				Caso queria entrar em contato comigo, eis o meu email: <a href="mailto:'. $email .'">'. $email .'</a>
				</br>
				</br>
				Atenciosamente,
				</p>
			</body>
		</html>
	';
	$to      = 'saraiva.ufc@gmail.com';
	$subject = 'Hackathon - Contato';

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$send_email = NULL;
	if( mail($to, $subject, $message_html, $headers) ){
		$send_email = TRUE;
	}else{
		$send_email = FALSE;
	};

	header('Location: index.php?send_email='. ($send_email ? 'TRUE' : 'FALSE') );

?>