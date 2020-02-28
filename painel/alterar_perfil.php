<?php
	include("assets/pages/includes/header.php");
?>
<content>
	<form action="#" method="post">
		<div class="corpo_perfil">
			<h2>Alterar perfil</h2>
	<label for="email">
		<h1>Novo email:</h1>
		<input type="text" name="email" placeholder="teste@paineladministracao.com" autocomplete="off">
	</label>
	<label for="senha">
		<h1>Nova Senha:</h1>
		<input type="password" name="senha" placeholder="**********" autocomplete="off">
	</label>
	<label for="senha">
		<h1>*Senha:</h1>
		<input type="password" name="senha" placeholder="**********" autocomplete="off" required>
	</label>
	<label for="facebook">
		<h1>Perfil FB:</h1>
		<input type="text" name="facebook" placeholder="www.facebook.com/" autocomplete="off">
	</label>
	<label for="twitter">
		<h1>Perfil TT:</h1>
		<input type="text" name="twitter" placeholder="www.twitter.com/" autocomplete="off">
	</label>
	<label for="instagram">
		<h1>Perfil INSTA:</h1>
		<input type="text" name="instagram" placeholder="www.instagram.com/" autocomplete="off">
	</label>
	<label for="linkedim">
		<h1>Perfil LINK:</h1>
		<input type="text" name="linkedim" placeholder="www.linkedim.com/" autocomplete="off">
	</label>
	<label for="imagem">
		<input type="file" accept="image/*" name="imagem" />
				<button>Enviar</button>
	</label>
		</div>
	</form>
</content>