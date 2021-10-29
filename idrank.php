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
		<title>Depósito Último Gole | Contate-nos</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/fav.ico"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/normalize.css"/>
		<link rel="stylesheet" href="css/navbar.css"/>
		<!-- Navbar customizada -->
		<link rel="stylesheet" href="css/custom.css"/>
		<!-- CSS contendo propriedades que definem parágrafos, textos, etc -->
	</head>
	<body>
		<div class="content">
			<br><br><br><br><br>
			<div class="container">
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-8" style="background-color: rgba(255, 255, 255, 0.60);">
						<h2 class="center-text" style="color: black">iDrank – Faça seu pedido sem sair de casa!</h2>
						<br>
						<p class="p1 center-text">O iDrank é um aplicativo destinado à entrega de bebidas que são de propriedade do depósito Último Gole.
						<br>
						Horário de atendimento via app:
						<br><br>
						Segunda a sábado das 8h às 23h.
						<br>Domingos e feriados das 9h às 19h.</p>
						<br>
						<p class="p1 center-text"> Para o download do nosso aplicativo de delivery basta escanear o QR Code abaixo que o satisfaça.<br>Disponibilidade: Android, iOS e Windows Mobile 10. </p>
						<br>
						<center><img src="img/qr.png"/ width="200px"></center><br>
					</div>
					<div class="col-lg-2"></div>
				</div>
			</div>
		</div>
		<hr>
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
							<li class="active"><a href="idrank.php">iDrank</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="contact.php"><span class="glyphicon glyphicon-earphone"></span> Contato</a></li>
							<li><a href="about.php"><span class="glyphicon glyphicon-user"></span> Sobre nós</a></li>
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
		<script>
			function msg(){
				alert("Mensagem enviada com sucesso!");
			}
		</script>
		<script>
			$(document).bootstrap();
		</script>
	</body>
</html>