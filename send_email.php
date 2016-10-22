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

	if( mail($to, $subject, $message_html, $headers) ){
		$mensagem = "Sua mensagem foi enviada com sucesso!";
		$tipo = "success";

	}else{
		$mensagem = "Ocorreu um erro ao enviar sua mensagem. Por favor, tente mais tarde.";
		$tipo = "error";
	};
	$data = array("mensagem" => $mensagem, "tipo" => $tipo);
	header('Content-Type: application/json');
	echo json_encode($data);
?>