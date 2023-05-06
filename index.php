<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Descrição do meu website">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<title>Site dinamico</title>
</head>
<body>
	<?php
	    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'depoimentos':
				echo '<target target="depoimentos" />';
				break;
			
			case 'servicos':
				echo '<target target="servicos" />';
				break;
		}
	?>
	<header>
		<div class="center">
		<div class="logo left">Logomarca</div>
		<nav class="desktop right">
			<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>home">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Sobre</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
			</ul>
		</nav>
		<nav class="mobile right">
			<div class="botao-menu-mobile">
				<img src="bars-solid.svg" style="width: 50px; height:45px;">
			</div>
			<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>home">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Sobre</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
			</ul>
		</nav>
		<div class="clear"></div>
		</div><!--center-->
	</header>
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		if(file_exists($url.'.php')){
			include($url.'.php');
		}
	?>
	<footer>
		<div class="center">
			<p>davierick999@gmail.com - todos os direitos reservados</p>
		</div>
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>function.js"></script>
</body>
</html>