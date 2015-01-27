<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Carousel Template for Bootstrap</title>

	
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

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Hackaton</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li>
                <li><a href="#contact">Contato</a></li>
              </ul>
            </div>
          </div>
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
				<img src="static/img/logo.jpg" alt="First slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Hackaton.</h1>
						<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">Increver-se</a></p>
					</div>
				</div>
			</div>

			<div class="item">
				<img src="static/img/ufc.jpg" alt="Second slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Universidade Federal do Ceará.</h1>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<p><a class="btn btn-lg btn-primary" href="#universidade" role="button">Ler mais</a></p>
					</div>
				</div>
			</div>

			<div class="item">
				<img src="static/img/ifactory.png" alt="Third slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Patrocinadores.</h1>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<p><a class="btn btn-lg btn-primary" href="#patrocinadores" role="button">Ler mais</a></p>
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
				<img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
				<h2>O que é um Hackaton?</h2>
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
				<img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
				<h2>O Nosso Hackaton</h2>
				
				<p class="text-justify">
					O NOME_HACKATON é um desafio que propõe a criação de uma solução tecnológica (aplicativo),
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
				<img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
				<h2>Edital</h2>
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				<p><a class="btn btn-default" href="static/files/edital.pdf" role="button">Download <span class="glyphicon glyphicon-download-alt"></span></a></p>
			</div><!-- /.col-lg-4 -->
		</div><!-- /.row -->


      <!-- START THE FEATURETTES -->

		<hr class="featurette-divider">

		<div id="universidade" class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading">Universidade.</h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
			</div>
			<div class="col-md-5">
				<img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
			</div>
		</div>


		<hr class="featurette-divider">

		<div class="row featurette">
			<div class="col-md-5">
				<img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
			</div>
			<div class="col-md-7">
				<h2 class="featurette-heading">Participantes.</h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
			</div>
		</div>

		<hr class="featurette-divider">

		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading">Premiação.</h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
			</div>
			<div class="col-md-5">
				<img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
			</div>
		</div>

		<hr class="featurette-divider">


		<div id="patrocinadores" class="row featurette">
			<div class="col-md-5">
				<img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
			</div>
			<div class="col-md-7">
				<h2 class="featurette-heading">Patrocinadores.</h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
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
