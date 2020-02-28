<?php
	session_start();
	include("assets/pages/includes/header.php");
?>
<content>
	<form action="#" method="post">
		<div class="corpo_perfil">
			<h2>Meu perfil</h2>
	<label for="email">
		<h1>Email:</h1>
		<input type="text" name="email" placeholder="teste@user.com.br" autocomplete="off" readonly>
	</label>
	<label for="senha">
		<h1>Senha:</h1>
		<input type="text" name="senha" placeholder="********" autocomplete="off" readonly>
	</label>
	<label for="facebook">
		<h1>Perfil FB:</h1>
		<input type="text" name="facebook" placeholder="www.facebook.com/" autocomplete="off" readonly>
	</label>
	<label for="twitter">
		<h1>Perfil TT:</h1>
		<input type="text" name="twitter" placeholder="www.twitter.com/" autocomplete="off" readonly>
	</label>
	<label for="instagram">
		<h1>Perfil INSTA:</h1>
		<input type="text" name="instagram" placeholder="www.instagram.com/" autocomplete="off" readonly>
	</label>
	<label for="linkedim">
		<h1>Perfil LINK:</h1>
		<input type="text" name="linkedim" placeholder="www.linkedim.com/" autocomplete="off" readonly>
	</label>
		</div>
	</form>
</content>