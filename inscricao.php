<?php include('header.php'); ?>
<div id="site">
	<?php include('navbar.php'); ?>
	<div class="jumbotron">
		<h1 class="text-center">Inscreva-se...</h1>
		<p class="text-center">Forme sua equipe e venha participar de mais esse desafio!</p>
	</div>
	<div class="container-fluid">
		<div class="col-md-8 col-md-offset-2">
			<form class="form-horizontal" name="formAjax" method="POST" action="send_inscricao.php">
				<div class="form-group">
					<label for="nome">Nome Completo:</label>
					<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite aqui seu nome completo sem abreviações">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Digite aqui seu email">
				</div>
				<div class="form-group">
					<label for="equipe">Equipe:</label>
					<input type="text" class="form-control" id="equipe" name="equipe" placeholder="Digite aqui o nome da sua equipe">
				</div>
				<div class="form-group">
					<label for="valor">Valor da Inscrição individual:</label>
					<input type="text" class="form-control" id="valor" value="R$ 10.00" disabled="true" title="Cada membro da equipe deve pagar esse valor!">
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" required="true">
					Marcando essa opção, você automaticamente concorda com todos os termos estabelecidos no nosso <a href="static/files/edital.pdf" target="_blank">edital</a>. Em caso de dúvidas, entre em <a href="#modal-contact" role="button" data-toggle="modal">contato</a> conosco.
				</label>
				</div>
				<button type="submit" class="btn btn-primary">Finalizar Inscrição</button>
			</form>
		</div>
	</div>
	</br>
	</br>
	</br>
	</br>
	<?php include('footer.php'); ?>
</div>