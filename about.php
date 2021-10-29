<?php
	//include ("DAO/connect.php");
	session_start();
	?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta http-equiv="Cache-control" content="no-cache">
		<title>Depósito Último Gole | Sobre</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/fav.ico"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/lightbox.min.css"/>
		<!-- Usado para ampliar de imagem -->
		<link rel="stylesheet" href="css/normalize.css"/>
		<link rel="stylesheet" href="css/navbar.css"/>
		<!-- Navbar customizada -->
		<link rel="stylesheet" href="css/custom.css"/>
		<!-- CSS contendo propriedades que definem parágrafos, textos, etc -->
	</head>
	<body>
		<!-- Conteúdo primário -->
		<div class="content">
			<br><br><br><br><br>
			<div class="container" style="background-color: rgba(255, 255, 255, 0.60);">
				<div class="row">
					<div class="col-sm-4">
						<br><br><br>
						<hr>
						<a href="img/about/about_1.jpg" data-lightbox="about_1" data-title="Erick Matheus Lopes Pacheco - Developer e web designer do projeto. 17 anos, estudante de técnico em informática na ETEC Hortolândia."><img src="img/about/about_1.jpg" class="img-circle" width="30%"/></a><a class="p1" style="text-decoration: none; color: black;">      Erick Matheus - Developer</a>
						<hr>
						<hr>
						<a href="img/about/about_2.jpg" data-lightbox="about_2" data-title="Rildo Damasceno do Nascimento Cunha Claro - Web designer do site. 18 anos, estudante de técnico em informática na ETEC Hortolândia."><img src="img/about/about_2.jpg" class="img-circle" width="30%"/></a><a class="p1" style="text-decoration: none; color: black;">      Rildo Claro - Web Designer</a>
						<hr>
					</div>
					<div class="col-sm-4">
						<h2 class="center-text" style="color: black;">Último Gole</h2>
						<br>
						<p class="p1">
							Somos um depósito de bebidas especializado na distribuição e fornecimento de bebidas em geral, 
							sendo juntamente com o aplicativo de delivery de bebidas iDrank, criação CREG Tech LTDA.
							<br><br>
							Fundado em Hortolândia no ano de 2017, o depósito Último Gole conta com as melhores marcas de bebidas 
							do país e com as melhores parcerias da região.
							<br><br>
							Possuímos compromisso com o cliente e asseguramos a satisfação do mesmo, de modo a nos empenharmos a ser os melhores da região!
						</p>
					</div>
					<div class="col-sm-4">
						<br><br><br>
						<hr>
						<a href="img/about/about_3.jpg" data-lightbox="about_3" data-title="Gian Carlos Ribeiro de Jesus - Developer e analista de banco de dados do projeto. 20 anos, técnico em administração formado e estudante de técnico em informática na ETEC Hortolândia."><img src="img/about/about_3.jpg" class="img-circle" width="30%"/></a><a class="p1" style="text-decoration: none; color: black;">      Gian Carlos - Developer</a>
						<hr>
						<hr>
						<a href="img/about/about_4.jpg" data-lightbox="about_4" data-title="Chrystian Maurício Carvalho de Oliveira - Analista de banco de dados do projeto. 19 anos, estudante de técnico em informática na ETEC Hortolândia."><img src="img/about/about_4.jpg" class="img-circle" width="30%"/></a><a class="p1" style="text-decoration: none; color: black;">      Chrystian Oliveira - DBA</a>
						<hr>
					</div>
				</div>
			</div>
			<br><br>
			<!-- Conteúdo secundário -->
			<div class="container-fluid" style="background-color: rgba(255, 255, 255, 0.60);">
				<div class="row">
					<div class="col-sm-4">
						<h3 class="center-text" style="color: black;">• Missão</h3>
						<br>
						<p class="p1">Com nosso depósito trazemos ao público um novo conceito de depósito, no qual junto com novas tecnologias busca oferecer a melhor comodidade e experiência para nossos clientes.
						</p>
					</div>
					<div class="col-sm-4">
						<h3 class="center-text" style="color: black;">• Visão</h3>
						<br>
						<p class="p1">Se tornar um grande modelo no ramo de distribuição de bebidas e afins, com grande reconhecimento, o melhor atendimento e atenção ao cliente, e crescimento junto ao mesmo.
						</p>
					</div>
					<div class="col-sm-4">
						<h3 class="center-text" style="color: black;">• Valores</h3>
						<br>
						<p class="p1">Responsabilidade juntamente com os clientes;

Tornar sua experiência o mais confortável;

Agir de maneira correta e justa;

Respeito a todos;

Ética do negócio.
						</p>
					</div>
				</div>
			</div>
			<!-- Fim -->
			<br><br>
		</div>
		<!-- Header & navbar fixos no topo -->
		<div class="nav navbar-fixed-top">
			<div id="custom-navbar" class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
						</button>
						<a class="navbar-brand text-hide" href="home.php">Último Gole</a>
					</div>
					<div class="collapse navbar-collapse navbar-menubuilder">
						<ul class="nav navbar-nav navbar-left">
							<li><a href="home.php">Home</a></li>
							<li><a href="promo.php">Promoções</a></li>
							<li><a href="idrank.php">iDrank</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="contact.php"><span class="glyphicon glyphicon-earphone"></span> Contato</a></li>
							<li class="active"><a href="about.php"><span class="glyphicon glyphicon-user"></span> Sobre nós</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Fim -->
		<!-- Rodapé -->
		<footer>
			<div style="background: rgba(0, 0, 0, 0.75);">
				<div class="center-text"><br><a href="home.php"><img src="img/logo_empresa.png" width="72px"/>
					</a>
				</div>
				<hr>
				<div class="container">
					<div class="row">
						<div class="col-xs-6" style="float: left;">
							<a href="about.php" class="rodt" style="padding-left: 20px;">Sobre o site</a>
							<a href="contact.php" class="rodt" style="padding-left: 30px;">Contato: (19) 99999-9999<a/>
							<a href="idrank.php" class="rodt" style="padding-left: 30px;">iDrank</a>
							<a href="#" class="rodt" style="padding-left: 30px;">Voltar ao topo</a>
						</div>
						<div class="col-xs-6">
							<p class="rodt" style="float: right;">© Copyright 2017 - Depósito Último Gole LTDA, todos os direitos reservados.</p>
							<br><br>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Fim -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/lightbox.min.js"></script>
		<script>
			$(document).bootstrap();
		</script>
	</body>
</html>