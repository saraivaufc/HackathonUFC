<?php include('header.php'); ?>
<div id="site">
	<?php include('navbar.php'); ?>

	<!-- Carousel ================================================== -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<div class="carousel-inner" role="listbox">

			<div class="item active">
				<img src="static/img/logo.jpg" alt="Logo da Hackathon">
				<div class="container">
					<div class="carousel-caption">
					</div>
				</div>
			</div>

			<div class="item" >
				<img src="static/img/ufc.jpg" alt="Imagem da Universidade Federal do Ceará">
				<div class="container">
					<div class="carousel-caption">
						<div class="box-text">
							<h1>Universidade Federal do Ceará:</h1>
							<p>
								Nosso evento ocorrerá na Universidade Federal do Ceará localizada na cidade de quixadá. Um dos princípais polos de Tecnologia da Informação(TI) do sertão central.
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="item">
				<img src="static/img/grupo-pet.jpg" alt="Imagem do Grupo PET Tecnologia da Informação">
				<div class="container">
					<div class="carousel-caption">
						<div class="box-text">
							<h1>Realização:</h1>
							<p>
								PET Tecnologia da Informação - Quixadá.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

	</div><!-- /.carousel -->

		<h2 class="text-center">
			<span class="text-black">
				Início <b>24</b> de <b>Nov</b> . às <b>10h</b> até <b>25</b> de <b>Nov</b>. às <b>10h</b>
			</span>
		</h2>

		<div class="text-center">
			<a href="inscricao.php" class="btn btn-primary btn-lg">Realizar Inscrição</a>
		</div>

		<!-- Marketing messaging and featurettes
		================================================== -->
		<!-- Wrap the rest of the page in another container to center all the content. -->
		<!-- START THE FEATURETTES -->
		<div id="numeros" class="row featurette">

		<section class="topics duplicatable-content">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="topic">
							<div class="col-md-6 col-md-offset-3">
								<img src="static/img/tempo.png">
							</div>
							<div class="col-md-12">
								<div class="text-center">
									Desde as 10:00 do dia 24 de novembro até as 10h do dia seguinte.
								</div>
								<ul class="ruled-list">
									<li  class="text-center">
										Critérios avaliados: Aderência ao Tema, Originalidade, Inovação, Utilidade e Usabilidade
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-6">
						<div class="topic">
							<div class="col-md-6 col-md-offset-3">
								<img src="static/img/equipe.png">
							</div>
							<div class="col-md-12">
								<div  class="text-center">
									Equipes com até 4 participantes cada, totalizando no máximo 40 players.
								</div>
								<ul class="ruled-list">
									<li  class="text-center">
										O valor da inscrição é de R$ 40,00 por equipe.
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-6">
						<div class="topic">
							<div class="col-md-6 col-md-offset-3">
								<img src="static/img/taca.png">
							</div>
							<div class="col-md-12">
								<div  class="text-center">
									No dia seguinte ao evento elegeremos e premiaremos a equipe campeã.
								</div>
								<ul class="ruled-list">
									<li  class="text-center">
									Será uma quantia em dinheiro revelado no dia do evento.
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		</div>

		<div id="oevento" class="row featurette">
			<div class="container-fluid">
				<div class="col-md-3 section-img">
					<img class="featurette-image img-responsive" src="static/img/other-hackathon.png" alt="premiação">
				</div>
				<div class="col-md-9 section">
					<h2 class="">A Hackathon:</h2>
					<p class="lead text-justify">
						É um período em tempo corrido (uma maratona) na busca de solucionar um desafio usando tecnologia. São bem vindos: programadores, desenvolvedores e inventores em geral, para desenvolver protótipos de soluções em uma competição amigável e que favorece a troca de experiências e de contatos profissionais.
					</p>
					<p class="lead text-justify">
						É uma excelente oportunidade para praticar criatividade e empreendedorismo, desenvolvendo suas idéias e observando as dos demais.
						Assim, trata-se uma uma competição em que
						programadores, designers e quem mais se interessar se juntam e ficam em imersão,
						numa troca interdisciplinar, para pensar e dar ao menos um start numa ideia.
					</p>
					<!--
					<p class="lead text-justify">
						Tema dessa edição será: "Visualização de Informação para Melhorar a Vida nas Cidades".
					</p>
					-->
				</div>
			</div>
		</div>

		<div id="programacao" class="row featurette">
			<div class="col-md-6 section">
				<h2>Programação:</h2>
				<p class="lead text-justify">
					Inciaremos o dia com uma palestra sobre o formato do evento onde haverá chance para tirar dúvidas. Em seguida, enunciaremos o problema desta edição sobre "Visualização de informação para melhorar a vida nas cidades" e liberaremos as equipes para o trabalho! Serão 24 horas de programação, criatividade, design e competitividade! O objetivo é incentivar a inovação e o espírito empreendedor dos competidores
				</p>
			</div>
			<div class="col-md-6 section-img">
				<ul class="schedule-overview">
					<li>
						<div class="schedule-title">
							<span class="time">10:00 do 1º dia</span>
							<span class="title">Abertura</span>
						</div>

						<div class="marker-pin">
							<div class="top"></div>
							<div class="middle"></div>
							<div class="bottom"></div>
						</div>
					</li>

					<li>
						<div class="schedule-title">
							<span class="time">10:30 do 1º dia</span>
							<span class="title">Divulgação do Problema e início da codificação</span>
						</div>

						<div class="marker-pin">
							<div class="top"></div>
							<div class="middle"></div>
							<div class="bottom"></div>
						</div>
					</li>

					<li>
						<div class="schedule-title">
							<span class="time">10:00 do 2º dia</span>
							<span class="title">Término Hackathon | Submissão dos projetos</span>
						</div>

						<div class="marker-pin">
							<div class="top"></div>
							<div class="middle"></div>
							<div class="bottom"></div>
						</div>
					</li>
					<li>
						<div class="schedule-title">
							<span class="time">16:00 do 2º dia</span>
							<span class="title">Demos (apresentação de 10 minutos)</span>
						</div>

						<div class="marker-pin">
							<div class="top"></div>
							<div class="middle"></div>
							<div class="bottom"></div>
						</div>
					</li>

					<li>
						<div class="schedule-title">
							<span class="time">17:30 do 2º dia</span>
							<span class="title">Os vencedores são anunciados!</span>
						</div>

						<div class="marker-pin">
							<div class="top"></div>
							<div class="middle"></div>
							<div class="bottom"></div>
						</div>
					</li>

				</ul>
			</div>
		</div>
		<div id="localizacao" class="row featurette">
			<div class="col-md-6 section-img">
				<iframe class="featurette-image" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.690362818057!2d-39.05646890401839!3d-4.979263172298886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x705b4707028de537!2sUniversidade+Federal+do+Cear%C3%A1!5e0!3m2!1spt-BR!2sbr!4v1430325510625" width="500" height="250" style="border:0">
				</iframe>
			</div>

			<div class="col-md-6 section">
				<h2>Local:</h2>
				<p class="lead text-justify">
					O evento ocorrerá no Campus de Quixadá da Universidade Federal do Ceará, que fica na Av. José de Freitas Queiroz, 5003 - Cedro Novo. Trata-se de um dos princípais polos tecnológicos da região do sertão central, contando com seis cursos da aréa da Tecnologia da Informação. Venha desenvolver suas habilidades!
				</p>
			</div>
		</div>
		<div id="premiacao" class="row featurette">
			<div class="col-md-9 section">
				<h2>Premiação:</h2>
				<p class="lead text-justify">
					O objetivo da II Hackathon de Inovação Tecnologica do Sertão Central  é prover ao participante o espírito de trabalho em equipe, mostrando um pouco da forma
					como empresas trabalham , além de promover uma disputa amigável em busca de bons programadores.
					Além de tudo isso, será oferrecido um prêmio em dinheiro para a equipe vencedora, como um incentivo para prossegir na sua aplicação.
				</p>
			</div>
			<div class="col-md-3 section-img">
				<img class="featurette-image img-responsive" src="static/img/taca.png" alt="premiação">
			</div>
		</div>
		<div id="regras" class="row featurette">
			<div class="col-md-6 section">
				<div class="image-inline">
					<img class="featurette-image inline img-responsive" src="static/img/equipe.png" width="45%" alt="Generic placeholder image">
					<img class="featurette-image inline img-responsive" src="static/img/tempo.png" width="45%" alt="Generic placeholder image">
				</div>
			</div>
			<div class="col-md-6 section-img">
				<h2>Regras:</h2>
				<p class="lead text-justify">
					O problema será disponibilizado às 10:00 do dia 24/11/2016 e os participantes terão até às 10:00 do dia seguinte para desenvolver e submeter um protótipo da solução.
				</p>
				<p class="lead text-justify">
					Poderão ser utilizadas quaisquer ferramentas para se desenvolver o protótipo. Constatado qualquer tipo de plágio por iniciativa de qualquer equipe, a mesma será eliminada.
				</p>
				<p class="lead text-justify">
					As demais regras e mais informações estão no <a href="static/files/edital.pdf" target="_black">edital</a>. O não comprimento de qualquer um dos termos nesse edital acaretará na eliminação imediata da equipe.
				</p>
			</div>
		</div>
		<div class="row featurette">
			<div class="col-md-6 section-img">
				<div class="content-face">
					<div id="face" fb-iframe-plugin-query="app_id=114545895322903&amp;container_width=588&amp;href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FHackathon-UFC%2F940408862659729%3Ffref%3Dts&amp;locale=pt_BR&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;width=500" fb-xfbml-state="rendered" class="fb-like fb_iframe_widget" data-share="true" data-show-faces="true" data-width="500" data-href="https://www.facebook.com/pages/Hackathon-UFC/940408862659729?fref=ts">
						<span style="vertical-align: bottom; width: 500px; height: 57px;">
							<iframe class="" src="https://www.facebook.com/v2.3/plugins/like.php?app_id=114545895322903&amp;channel=https%3A%2F%2Fs-static.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FKTWTb9MY5lw.js%3Fversion%3D41%23cb%3Df2cce899c3f6514%26domain%3Ddevelopers.facebook.com%26origin%3Dhttps%253A%252F%252Fdevelopers.facebook.com%252Ff3459fd9ca81f6%26relation%3Dparent.parent&amp;container_width=588&amp;href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FHackathon-UFC%2F940408862659729%3Ffref%3Dts&amp;locale=pt_BR&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;width=500" style="border: medium none; visibility: visible; width: 500px; height: 57px;" title="fb:like Facebook Social Plugin" scrolling="no" allowfullscreen="true" allowtransparency="true" name="f175ee4d38f89fa" frameborder="0" height="1000px" width="500px">
							</iframe>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 section">
				<h2>Realização:</h2>
				<div class="image-inline">
					<img class="featurette-image inline img-responsive" src="static/img/logo-pet-ti.png" width="30%" alt="Generic placeholder image">
					<img class="featurette-image inline img-responsive" src="static/img/logo-ufc-quixada.png" width="30%" alt="UFC Quixadá">
					<img class="featurette-image inline img-responsive" src="static/img/logo-ufc.png" width="30%" alt="PET SI">
				</div>
			</div>
		</div>
		<hr class="divider">
		<!-- /END THE FEATURETTES -->

	<?php include('footer.php'); ?>
</div>