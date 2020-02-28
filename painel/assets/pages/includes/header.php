<?php
	require_once("assets/php/config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Language" content="pt-br">
	<link rel="stylesheet" type="text/css" href="<?php echo $config['site_url']; ?>painel/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $config['site_url']; ?>painel/assets/css/media.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/d90824391e.js" crossorigin="anonymous"></script>
	<title><?php echo $config['site_title']; ?></title>
</head>
<body>
	<header>
		<h4>Painel de Administração, seja bem vindo!</h4>
		<nav>
			<ul>
				<li><a href="<?php echo $config['site_url'] . "painel/perfil.php"; ?>"><i class="fas fa-id-card" azul></i></a></li>
				<li><a href="<?php echo $config['site_url'] . "painel/alterar_perfil.php"; ?>"><i class="fas fa-user-cog" cinza></i></a></li>
				<li><a href="<?php echo $config['site_url'] . "painel/sistema.php"; ?>"><i class="fas fa-wrench" amarelo></i></a></li>
				<li><a href="sair.php"><i class="fas fa-power-off" vermelho></i></a></li>
			</ul>
		</nav>
	</header>
			<div class="responsive">
				<ul>
					<li><a href="<?php echo $config['site_url'] . "painel/"; ?>">Home</a></li>
					<li><a href="<?php echo $config['site_url'] . "painel/slide.php"; ?>">Slides</a></li>
					<li><a href="<?php echo $config['site_url'] . "painel/noticia.php"; ?>">Notícias</a></li>
					<li><a href="<?php echo $config['site_url'] . "painel/banners.php"; ?>">Banners</a></li>
					<li><a href="<?php echo $config['site_url'] . "painel/usuarios.php"; ?>">Usuários</a></li>
					<li><a href="<?php echo $config['site_url'] . "painel/produtos.php"; ?>">Produtos</a></li>
				</ul>
			</div>
		<div class="menu-lateral">
			<div class="img-autor">
				<img src="<?php echo $config['site_url']; ?>painel/assets/images/autor.png">
			</div>
			<nav>
				<ul>
					<li><a href="<?php echo $config['site_url'] . "painel/"; ?>">Home</a></li>
					<li><a href="<?php echo $config['site_url'] . "painel/slide.php"; ?>">Slides</a></li>
					<li><a href="<?php echo $config['site_url'] . "painel/noticia.php"; ?>">Notícias</a></li>
					<li><a href="<?php echo $config['site_url'] . "painel/banners.php"; ?>">Banners de Parceria</a></li>
					<li><a href="<?php echo $config['site_url'] . "painel/usuarios.php"; ?>">Usuários</a></li>
					<li><a href="<?php echo $config['site_url'] . "painel/produtos.php"; ?>">Produtos</a></li>
				</ul>
			</nav>
			<div class="sociais">
				<h6>Me siga no facebook</h6>
				<ul>
					<li><a href="http://www.facebook.com/N1ckSilva"><i class="fab fa-facebook-square"></i></a></li>
				</ul>
			</div>
		</div>