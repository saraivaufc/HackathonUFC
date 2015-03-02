<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Ciano Saraiva <saraiva.ufc@gmail.com>">

		<title>HACKATON UFC 2015</title>

		<link rel="shortcut icon" type="image/png" href="static/img/icon.png"/>

	
		<!-- Bootstrap core CSS -->
		<link href="static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="static/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">


		<!-- My Stylesheet -->
		<link href="static/css/base.css" rel="stylesheet">


		

		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Custom styles for this template -->

	</head>
<!-- NAVBAR
================================================== -->
<body>
	<div class="navbar-wrapper">
		<div class="container">
			<div class="row">
			<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="#">Hackaton UFC</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-left">
							<li class="active">
								<a href="#">Inicio</a>
							</li>
							<li>
								<a href="#local">Local</a>
							</li>
							<li>
								<a href="#premiacao">Premiação</a>
							</li>
							<li>
								<a href="#apoio">Apoio</a>
							</li>
							<li>
								<a href="#myModal" role="button" data-toggle="modal">Contato</a>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#">Inscrever-se</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			</div>
		</div>
	</div>


	<!-- Carousel
	================================================== -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		
		<div class="carousel-inner">

			<div class="item active">
				<img src="static/img/logo.png" alt="First slide">
				<div class="container">
					<div class="carousel-caption">
					</div>
				</div>
			</div>

			<div class="item">
				<img src="static/img/ufc.jpg" alt="Second slide">
				<div class="container">
					<div class="carousel-caption">
						<div class="box-text">
							<h1>Universidade Federal do Ceará:</h1>
							<p>
								A Hackaton UFC 2015 ocorrerá na Universidade Federal do Ceará localizada na cidade de quixadá. O maior centro de Tecnologia da Informação(TI) do sertão central. 
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="item">
				<img src="static/img/ifactory.png" alt="Third slide">
				<div class="container">
					<div class="carousel-caption">
						<div class="box-text">
							<h1>Apoio:</h1>
							<p>
								Contamos com apoio do grupo PET Tecnologia da Informação da Universidade Federal do Ceará em conjunto com a empresa Ifactory Solutions.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

	</div><!-- /.carousel -->



	<!-- Marketing messaging and featurettes
	================================================== -->
	<!-- Wrap the rest of the page in another container to center all the content. -->

	<div class="container marketing">

	  <!-- Three columns of text below the carousel -->
		<div class="row">
			<div class="col-lg-4">
				<img class="img-circle" src="static/img/hackaton-icon.png" alt="Hackaton">
				<h2>O que é uma Hackaton?</h2>
				<p class="text-justify">
					O Hackathon é uma maratona de hackers, programadores, desenvolvedores e inventores 
					em geral para promover o desenvolvimento de projetos que visem a transparência de 
					informações públicas por meio de tecnologias digitais.
				</p>
				<div id="collapseOne" class="panel-collapse collapse">
				<p class="text-justify">
					A palavra em si vem da junção das palavras inglesas Hack e Marathon. 
					Ao contrário do que povoa o imaginário de muita gente, hackers não são criminosos. 
					Parafraseando a Wikipedia, hacker é quem se dedica, com intensidade incomum, 
					a conhecer e entender profundamente sistemas, dispositivos, programas e 
					redes de computadores. E maratona é uma corrida de longa distância que demanda 
					bastante energia do(a) competidor(a).
				</p>
				<p class="text-justify">
					Assim, trata-se uma uma competição em que 
					programadores, designers e quem mais se interessar se juntam e ficam em imersão, 
					numa troca interdisciplinar, para pensar e dar ao menos um start numa ideia. 
					Os primeiros eventos desse tipo ocorreram em 1999 nos Estados Unidos e, desde então, 
					se expandiram para além desse país e vem se popularizando também no Brasil.
				</p>
				</div>
				<button class="btn btn-default view-details" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" role="button" value="">
					Detalhes <span class="glyphicon glyphicon-chevron-down"></span>
				</button>

			</div><!-- /.col-lg-4 -->

		<div class="col-lg-4">
				<img class="img-circle" src="static/img/icon.png" alt="Hackaton UFC">
				<h2>A Hackaton UFC 2015</h2>
				
				<p class="text-justify">
					O Hackaton UFC 2015 é um desafio que propõe a criação de uma solução tecnológica (aplicativo),
					com código aberto, durante 02 dias. São 1.980 minutos de programação, criatividade, design e competitividade!
					o objetivo é fomentar o conhecimento tecnológico e o espírito de competidor daqueles que ousam ser desafiados. 
				</p>
				<div id="collapseTwo" class="panel-collapse collapse">
				<p class="text-justify">
					O evento será realizado nos dias 14 e 15 de março de 2015, começando às 08:30 da manhã do dia 14
					com uma abertura de 30 minutos e encerrando-se as 20:00 do dia 15 com a premiaçao.
					As equipes serao de 4 membros, limitando-se a 10 equipes no total. Cada equipe terá de produzir 
					uma solução tecnologica (software e hardware) utilizável dentro das trilhas:
					<ul class="text-left">
						<li>Desigualdade.</li>
						<li>Energia e meio ambiente.</li>
						<li>Saúde e bem-estar.</li>
						<li>Educação.</li>
					</ul>
				</p>
				</div>
				<button class="btn btn-default view-details" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" role="button">
					Detalhes <span class="glyphicon glyphicon-chevron-down"></span>
				</button>
		</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<img class="img-circle" src="static/img/edital.png" alt="Edital">
				<h2>O Edital</h2>
				<p class="text-justify">
					As informações gerais sobre o evento  estão aqui, todas as informações nesse edital são absolutas, podendo ser alteradas somente pelos organizadores e tais alterações terão de ser informadas previamente aos participantes.
				</p>
				<p><a class="btn btn-default" href="static/files/edital.pdf" role="button">Download <span class="glyphicon glyphicon-download-alt"></span></a></p>
			</div><!-- /.col-lg-4 -->
		</div><!-- /.row -->


	  <!-- START THE FEATURETTES -->

		<hr class="featurette-divider">

		<div id="local" class="row featurette">
			<div class="col-md-7 section">
				<h2 class="featurette-heading">Local:</h2>
				<p class="lead text-justify">
					A Hackaton UFC 2015 ocorrerá na Universidade Federal do Ceará localizada na cidade de quixadá. O campus é um dos 
					princípais polos tecnologicos da região do sertão central contando com seis cursos da aréa da computação que são:
					<ul>
						<li>
							<a href="http://pt.wikipedia.org/wiki/Ci%C3%AAncia_da_computa%C3%A7%C3%A3o"  target="_blank">
								Ciência da Computação
							</a>
						</li>
						<li>
							<a href="http://pt.wikipedia.org/wiki/Designer_digital" target="_blank">
								Designer Digital
							</a>
						</li>
						<li>
							<a href="http://pt.wikipedia.org/wiki/Engenharia_de_computa%C3%A7%C3%A3o"  target="_blank">
							Engenharia da Computação
							</a>
						</li>
						<li>
							<a href="http://pt.wikipedia.org/wiki/Engenharia_de_software"  target="_blank">
								Engenharia de Software
							</a>
						</li>
						<li>
							<a href="http://pt.wikipedia.org/wiki/Sistema_de_informa%C3%A7%C3%A3o"  target="_blank">
								Sistemas de Informação
							</a>
						</li>
						<li>
							<a href="http://pt.wikipedia.org/wiki/Rede_de_computadores"  target="_blank">
								Redes de Computadores
							</a>
						</li>
					</ul>
				</p>
			</div>
			<div class="col-md-5 section-img">
				<img class="featurette-image img-responsive" src="static/img/ufc-front.png" alt="Generic placeholder image">
			</div>
		</div>

		<hr class="featurette-divider">

		<div id="premiacao" class="row featurette">
			<div class="col-md-7">
				<img class="featurette-image img-responsive" src="static/img/premiacao.png" alt="premiação">
			</div>
			<div class="col-md-5 section">
				<h2 class="featurette-heading">Premiação:</h2>
				<p class="lead text-justify">
					O Objetivo do Hackaton UFC 2015 é prover ao participante o espirito de trabalho em equipe, mostrando um pouco  da forma
					como muitasempresas trabalham com seu funcionario, além d promover uma disputa amigavel em busca de bons programadores.
					Além de tudo isso, será oferrecido R$ 650,00 para a equipe vencedora, como um incentivo para prossegir na sua aplicação.
				</p>
			</div>
		</div>

		<hr class="featurette-divider">


		<div id="apoio" class="row featurette">
			<div class="col-md-5 section-img">
				<h2 class="featurette-heading">Apoio:</h2>
				<p class="lead text-justify">
					Contamos com apoio do grupo PET Tecnologia da Informação da Universidade Federal do Ceará em conjunto com a empresa Ifactory Solutions.
				</p>
			</div>
			<div class="col-md-7 section">
				<img class="featurette-image img-responsive" src="static/img/ifactory-logo.png" alt="Generic placeholder image">
			</div>
		</div>

		<hr class="featurette-divider">

	  <!-- /END THE FEATURETTES -->


	  <!-- FOOTER -->
	  <footer>
		<p class="pull-right"><a href="#">Ir para o topo</a></p>
		<p><span class="glyphicon glyphicon-copyright-mark"></span> 2015 Programa de Educação Tutorial - Tecnológia da Informação.</p>
	  </footer>

	</div><!-- /.container -->


	<!-- Modal Contact -->

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-body">
	  	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Gostaríamos muito de ouvir de você</h3>

		<form class="form-horizontal col-sm-12" action="send_email.php" method="POST">
		  <br>
		  <div class="form-group">
			<label>Nome</label>
			<input class="form-control required" placeholder="Seu nome" name="name" data-placement="top" data-trigger="manual" data-content="Deve ter pelo menos 3 caracteres, e deve conter apenas letras." type="text" required>
		  </div>
		  <div class="form-group">
			<label>Mensagem</label>
			<textarea class="form-control" placeholder="Sua mensagem aqui..." name="messager" data-placement="top" data-trigger="manual" required></textarea>
		  </div>
		  <div class="form-group">
			<label>E-Mail</label>
			<input class="form-control email" placeholder="email@service.com (para que possamos entrar em contato com você)" name="email" data-placement="top" data-trigger="manual" data-content="Deve ser um endereço de e-mail válido (usuario@gmail.com)" type="text" required></div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-success pull-right">Enviar!</button>
		  	<p class="help-block pull-left text-danger hide" id="form-error">&nbsp; O Formulário não é válido. </p>
		  </div>
		</form>


	  </div>
	  <div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
	  </div>
	</div>
  </div>
</div>



	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
		<!-- Jquery -->
		<script src="static/jquery/jquery-2.1.3.min.js"></script>

		<!-- Bootstrap core JS -->
		<script src="static/bootstrap/js/bootstrap.min.js"></script>

		<!-- My Scripts -->
		<script src="static/js/base.js"></script>		

		<script src="static/assets/js/docs.min.js"></script>
  </body>
</html>
