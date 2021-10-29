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
		<title>Depósito Último Gole | Bebidas? Xáconóis!</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/fav.ico"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/normalize.css"/>
		<link rel="stylesheet" href="css/navbar.css"/>
		<!-- Navbar customizada -->
		<link rel="stylesheet" href="css/custom.css"/>
		<!-- CSS contendo propriedades que definem parágrafos, textos, etc -->
	</head>
	<body>
		<!-- Conteúdo principal -->
		<div class="content">
			<br><br><br><br><br>
			<div class="container">
				<div class="row" >
					<div class="col-sm-6" style="background: rgba(255, 255, 255, 0.60);">
						<h2 class="center-text" style="color: black;">
							Bem-vindo!
						</h2>
						<br>
						<p class="p1">Somos o depósito de bebidas número #1 da região de Campinas e estamos dispostos a fazer o melhor pelos nossos clientes. Com um serviço de primeira e um website com visual agradável e intuitivo, fornecemos nossos serviços através da internet, por telefone, pelo aplicativo conjunto iDrank e sem contar, é claro, direto no depósito.
							<br><br>
						Contamos com um depósito especializado onde nosso estoque é garantido de maneira que não deixemos a desejar o cliente quanto a disponibilidade de bebidas.
							<br><br>
						Continue lendo para descobrir mais sobre nós!
						</p>
					</div>
				</div>
			</div>
			<br><br>
			<div class="container">
				<div class="row" >
					<div class="col-sm-6"></div>
					<div class="col-sm-6" style="background: rgba(255, 255, 255, 0.60);">
						<h2 class="center-text" style="color: black;">
							Grande acervo de bebidas
						</h2>
						<br>
						<p class="p1">Nosso acervo conta com os tipos mais variados de bebidas, visto que possuímos fornecedores de todo os lugares do Brasil, incluindo fornecedores internacionais, permitindo com que nós possamos atender uma demanda muito mais abrangente e ter a disponibilidade de produtos específicos e especiais. Em nosso balcão, o cliente poderá desfrutar das melhores bebidas.
							<br><br>
						O Depósito Último Gole possui como dever oferecer produtos de qualidade, de modo que o cliente saia feliz.
						</p>
					</div>
				</div>
			</div>
			<br><br>
			<div class="container">
				<div class="row" >
					<div class="col-sm-6" style="background: rgba(255, 255, 255, 0.60);">
						<h2 class="center-text" style="color: black;">
							Delivery
						</h2>
						<br>
						<p class="p1">Possuímos um serviço de delivery 23h por dia, através do aplicativo iDrank desenvolvido pela CREG Tech, fundadora do Depósito Último Gole.
						<br><br>
						O pedido de delivery pode ser realizado via ligação telefônica, dentro do horário de atendimento nosso. Já pedidos de delivery através do aplicativo iDrank não possuem restrição de horário, funcionando 23h por dia (das 0h às 23h) e sempre em total disponibilidade para o cliente que deseja aquela geladinha no meio da noite ou para suprir a falta de bebidas numa noitada!
						<br><br>
						Para encomendas, deliverys e maiores informações, favor <a href="contact.php">entrar em contato.</a>
						</p>
					</div>
				</div>
			</div>
			<!-- Fim -->
			<br><br><br>
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
							<li class="active"><a href="#">Home</a></li>
							<li><a href="promo.php">Promoções</a></li>
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
							<a href="iDrank.php" class="rodt" style="padding-left: 30px;">iDrank</a>
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
		</script>
	</body>
</html>