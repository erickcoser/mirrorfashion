<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php print $cabecalho_title; ?></title>
		<link href="css/reset.css" rel="stylesheet">
		<link href="css/estilos.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<?php print @$cabecalho_css; ?>
		<!--[if lt IE 9]>
			<script src="bower_components/html5shiv/dist/html5shiv.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<header class="container">
			<h1><a href="index.php"><img src="img/logo.png" alt="Mirror Fashion"></a></h1>
			
			<p class="sacola">
				Nenhum ítem na sacola de compras
			</p>
			
			<nav class="menu-opcoes">
				<ul>
					<li><a href="#">Sua Conta</a></li>
					<li><a href="#">Lista de Desejos</a></li>
					<li><a href="#">Cartão Fidelidade</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="#">Ajuda</a></li>
				</ul>
			</nav>
		</header>