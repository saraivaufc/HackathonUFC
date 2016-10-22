	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Início</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					<li>
						<a href="index.php#oevento">A Hackathon</a>
					</li>
					<li>
						<a href="index.php#programacao">Programação</a>
					</li>
					<li>
						<a href="index.php#localizacao">Local</a>
					</li>
					<li>
						<a href="index.php#premiacao">Premiação</a>
					</li>
					<li>
						<a href="index.php#regras">Regras</a>
					</li>
					<li>
						<a href="static/files/edital.pdf" target="_black">Edital</a>
					</li>
					<li>
						<a href="#modal-contact" role="button" data-toggle="modal">Contato</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="inscricao.php">Realizar Inscrição</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
<?php
	if(isset($_GET['send_email'])){
		$send_email = $_GET['send_email'];
	}else{
		$send_email = FALSE;
	}

	if($send_email == 'TRUE'){
		?>
			<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Sucesso!</strong> Sua mensagem foi enviada!. :)
			</div>
		<?php
	}else if($send_email == 'FALSE'){
		?>
			<div class="alert alert-danger">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Erro!</strong> Sua mensagem não pode ser enviada!, tente novamente mais tarde. :(
			</div>
		<?php
	}
?>

<?php include('modals/contact.php'); ?>