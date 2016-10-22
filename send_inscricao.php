<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$equipe = $_POST['equipe'];
	$message_html = '
		<html>
			<head>
				<title>Hackathon - Inscrição</title>
				<style>
					dl {
					    display: block;
					    margin-top: 1em;
					    margin-bottom: 1em;
					    margin-left: 0;
					    margin-right: 0;
					}
				</style>
			</head>
			<body>
				<dl>
					<dt>Nome:</dt>
					<dd>' . $nome . '</dd>
					<dt>Email:</dt>
					<dd>' . $email . '</dd>
					<dt>Equipe:</dt>
					<dd>' . $equipe . '</dd>
				</dl>
			</body>
		</html>
	';
	$to      = 'saraiva.ufc@gmail.com';
	$subject = 'Hackathon - Inscrição';

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	if( mail($to, $subject, $message_html, $headers) ){
		$mensagem = "Sua solicitação de inscrição foi realizada com sucesso! Agora você deve realizar o pagamento para confirmar sua inscrição.";
		$tipo = "success";

	}else{
		$mensagem = "Ocorreu um erro ao enviar sua solicitação de inscrição. Por favor, tente mais tarde.";
		$tipo = "error";
	};
	$data = array("mensagem" => $mensagem, "tipo" => $tipo);
	header('Content-Type: application/json');
	echo json_encode($data);
?>