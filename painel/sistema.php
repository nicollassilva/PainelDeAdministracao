<?php
	session_start();
	include("assets/pages/includes/header.php");
?>
<content>
	<form action="#" method="post">
		<div class="corpo_perfil">
			<h2>Configurações do Sistema</h2>
	<label for="hostnamedb">
		<h1>Hostname:</h1>
		<input type="text" name="hostnamedb" placeholder="localhost" autocomplete="off">
	</label>
	<label for="usuariodb">
		<h1>Usuário:</h1>
		<input type="text" name="usuariodb" placeholder="root" autocomplete="off">
	</label>
	<label for="senhadb">
		<h1>Senha:</h1>
		<input type="text" name="senhadb" placeholder="******" autocomplete="off">
	</label>
	<label for="database">
		<h1>Database:</h1>
		<input type="text" name="database" placeholder="paineladm" autocomplete="off">
	</label>
	<label for="porta">
		<h1>Porta:</h1>
		<input type="text" name="porta" placeholder="80" autocomplete="off">
	</label>
	<label for="manutencao">
		<h1>Manutenção:</h1>
		<input type="text" name="manutencao" placeholder="Não" autocomplete="off">
	</label>
			<button>Editar</button>
		</div>
	</form>
</content>