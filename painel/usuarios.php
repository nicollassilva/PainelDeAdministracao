<?php
	session_start();
	include("assets/pages/includes/header.php");
?>
<content>
	<form action="#" method="post">
	<div class="buscaUsuarios">
		<h1>Pesquisar Usuários</h1>
		<label for="busca">
		<input type="text" name="busca" placeholder="Buscar usuário"/>
		<button class="enviar"><i class="fas fa-search"></i></button>
		</label>
	</div>
	<div class="usuarios">
		<h2 class="title">Resultado da pesquisa:</h2>
	<div class="usuario">
		<div class="usuario-info"><h1>ID: 01</h1></div>
		<div class="usuario-info"><h1>Nome: Nicollas Silva</h1></div>
		<div class="usuario-info"><h1>Email: nicollas@teste.com.br</h1></div>
		<div class="usuario-info"><h1>Data de Nascimento: 20/81/1058</h1></div>
		<div class="usuario-info"><h1>Último login: 27/02/2020 às 20:14</h1></div>
		<div class="usuario-info inside"><h1>Comentários: 52 comentários</h1><h2>Posts no fórum: 23 posts</h2></div>
		<div class="buttons">
			<a href="#"><i class="fas fa-user-edit" azul-edit title="Editar usuário"></i></a>
			<a href="#" onclick="window.confirm('Você deseja excluir esse usuário?')"><i class="fas fa-user-times" vermelho title="Excluir usuário"></i></a>
			<a href="#"><i class="fas fa-user-slash" cinza title="Punir usuário"></i></a>
		</div>
	</div>

	<div class="usuario">
		<div class="usuario-info"><h1>ID: 01</h1></div>
		<div class="usuario-info"><h1>Nome: Nicollas Silva</h1></div>
		<div class="usuario-info"><h1>Email: nicollas@teste.com.br</h1></div>
		<div class="usuario-info"><h1>Data de Nascimento: 20/81/1058</h1></div>
		<div class="usuario-info"><h1>Último login: 27/02/2020 às 20:14</h1></div>
		<div class="usuario-info inside"><h1>Comentários: 52 comentários</h1><h2>Posts no fórum: 23 posts</h2></div>
		<div class="buttons">
			<a href="#"><i class="fas fa-user-edit" azul-edit title="Editar usuário"></i></a>
			<a href="#" onclick="window.confirm('Você deseja excluir esse usuário?')"><i class="fas fa-user-times" vermelho title="Excluir usuário"></i></a>
			<a href="#"><i class="fas fa-user-slash" cinza title="Punir usuário"></i></a>
		</div>
	</div>

	<div class="usuario">
		<div class="usuario-info"><h1>ID: 01</h1></div>
		<div class="usuario-info"><h1>Nome: Nicollas Silva</h1></div>
		<div class="usuario-info"><h1>Email: nicollas@teste.com.br</h1></div>
		<div class="usuario-info"><h1>Data de Nascimento: 20/81/1058</h1></div>
		<div class="usuario-info"><h1>Último login: 27/02/2020 às 20:14</h1></div>
		<div class="usuario-info inside"><h1>Comentários: 52 comentários</h1><h2>Posts no fórum: 23 posts</h2></div>
		<div class="buttons">
			<a href="#"><i class="fas fa-user-edit" azul-edit title="Editar usuário"></i></a>
			<a href="#" onclick="window.confirm('Você deseja excluir esse usuário?')"><i class="fas fa-user-times" vermelho title="Excluir usuário"></i></a>
			<a href="#"><i class="fas fa-user-slash" cinza title="Punir usuário"></i></a>
		</div>
	</div>

	</div>
	</form>
</content>