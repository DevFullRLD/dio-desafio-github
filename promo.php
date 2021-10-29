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
		<title>Depósito Último Gole | Promoções</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/fav.ico"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/normalize.css"/>
		<link rel="stylesheet" href="css/navbar.css"/>
		<!-- Navbar customizada -->
		<link rel="stylesheet" href="css/custom.css"/>
		<!-- CSS contendo propriedades que definem parágrafos, textos, etc -->
	</head>
	<body style="background-color: #F5F5F5;">
		<!-- Conteúdo principal -->
		<div class="content">
			<br><br><br><br><br>
			<div class="container">
				<div class="row">
					<div class="col-sm-12" style="background-color: rgba(255, 255, 255, 0.60);">
						<h2 class="center-text" style="color: black;">Promoções</h2>
					</div>
				</div>
			</div>
			<!-- Fileira 1 dos produtos-->
			<div class="container" style="background-color: rgba(255, 255, 255, 0.60);">
				<div class="row">
					<div class="col-sm-3">
						<center><img src="img/promo/promo.png"/ width="200px"><br></center>
						<p class="promo">Johnnie Walker Black Label Original<br>R$150,00</p>
					</div>
					<div class="col-sm-3">
						<center><img src="img/promo/promo2.png" width="200px"/></center>
						<p class="promo">Johnnie Walker Red Label Original<br>R$99,90</p>
					</div>
					<div class="col-sm-3">
						<center><img src="img/promo/promo3.png"/ width="200px"></center>
						<p class="promo">Johnnie Walker Blue Label Original<br>R$729,00</p>
					</div>
					<div class="col-sm-3">
						<center><img src="img/promo/promo4.png"/ width="200px"></center>
						<p class="promo">Johnnie Walker Green Label Original<br>R$289,90</p>
					</div>
				</div>
			</div>
			<!-- Fileira 2 dos produtos-->
			<br>
			<div class="container" style="background-color: rgba(255, 255, 255, 0.60);">
				<div class="row">
					<div class="col-sm-3">
						<center><img src="img/promo/promo5.png" width="200px"/></center>
						<p class="promo">Vodka Absolut Original<br>R$79,90</p>
					</div>
					<div class="col-sm-3">
						<center><img src="img/promo/promo6.png" width="200px"/></center>
						<p class="promo">Vodka Russa Stolichnaya 1 Litro<br>R$69,90</p>
					</div>
					<div class="col-sm-3">
						<center><img src="img/promo/promo7.png"/ width="200px"></center>
						<p class="promo">Vodka CIROC GFA 3L Original<br>R$705,00</p>
					</div>
					<div class="col-sm-3">
						<center><img src="img/promo/promo8.png"/ width="200px"></center>
						<p class="promo">Bebida Skyy Vodka 980 ml<br> R$44,92</p>
					</div>
				</div>
			</div>
			<!-- Fileira 3 dos produtos-->
			<br>
			<div class="container" style="background-color: rgba(255, 255, 255, 0.60);">
				<div class="row">
					<div class="col-sm-3">
						<center><img src="img/promo/promo9.png" width="200px"/ class="center-text"></center>
						<p class="promo">Skol Beats Senses Long Neck 313ml Caixa C/6 unidades<br>R$26,94</p>
					</div>
					<div class="col-sm-3">
						<center><img src="img/promo/promo10.png" width="200px" class="center-text"/></center>
						<p class="promo">Cerveja Budweiser 600ml<br>R$4,79</p>
					</div>
					<div class="col-sm-3">
						<center><img src="img/promo/promo11.png"/ width="200px" class="center-text"/></center>
						<p class="promo">Cerveja Stella Artois 550ml<br>R$6,49</p>
					</div>
					<div class="col-sm-3">
						<center><img src="img/promo/promo12.png"/ width="200px" class="center-text"/></center>
						<p class="promo">Corona Extra<br>R$8,30</p>
					</div>
				</div>
			</div>
			<!-- Fileira 4 dos produtos-->
			<br>
			<div class="container" style="background-color: rgba(255, 255, 255, 0.60);">
				<div class="row">
					<div class="col-sm-3">
						<center><img src="img/promo/promo13.png" width="200px"/></center>
						<p class="promo">Guaraná Antartica 3L<br>R$6,50</p>
					</div>
					<div class="col-sm-3">
						<center><img src="img/promo/promo14.png" width="200px"/></center>
						<p class="promo">Coca-Cola 3L<br>R$7,50</p>
					</div>
					<div class="col-sm-3">
						<center><img src="img/promo/promo15.png"/ width="200px"/></center>
						<p class="promo">Fanta 3L<br>R$5,99</p>
					</div>
					<div class="col-sm-3">
						<center><img src="img/promo/promo16.png"/ width="200px"></center>
						<p class="promo">Sukita 3L<br>R$4,79</p>
					</div>
				</div>
			</div>
			<!-- Fim -->
			<br>
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
							<li class="active"><a href="#">Promoções</a></li>
							<li><a href="idrank.php">iDrank</a></li>
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
			$(document).bootstrap();
			var txt;
			var r = confirm("Press a button!");
				if (r == true) {
					txt = "You pressed OK!";
				} else {
					txt = "You pressed Cancel!";
				} 
		</script>
	</body>
</html>