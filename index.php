	<?php
	require_once("painel/assets/php/config.php");
	?>
<!DOCTYPE html>
<html lang="pt/BR">
<head>
	<link rel="stylesheet" href="<?php echo $config['site_url']; ?>assets/css/style.css">
	<script src="https://kit.fontawesome.com/d90824391e.js" crossorigin="anonymous"></script>
	<title>Login - <?php echo $config['site_title']; ?></title>
</head>
<body>
		<main>
			<div class="box">
				<div class="title">
					<i class="fas fa-atom"></i>
					<h3>Painel de Administração</h3>
				</div>
					<div class="content">
						<form action="assets/php/validaLogin.php" method="post">
							<h6>Faça seu login...</h6>
							<label for="login">
								<i class="fas fa-user"></i>
								<input type="text" name="email" placeholder="Seu email" autocomplete="off">
							</label>
							<br>
							<label for="password">
								<i class="fas fa-key"></i>
								<input type="password" name="senha" placeholder="Sua senha">
							</label>
						<br>
					<button class="login">Entrar</button>
				</form>
					</div>
						<div class="box2">
				<h1>Ainda não tem uma conta?</h1>
					<a href="#"><button class="cadastrar">Cadastrar usuário</button></a>
					<h2>Esqueceu sua senha?</h2>
					<a href="#"><button class="forgot">Lembrar senha</button></a>
				</div>
			</div>
		</main>
</body>
</html>