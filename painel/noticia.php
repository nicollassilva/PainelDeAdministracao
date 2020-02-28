<?php
	session_start();
	include("assets/pages/includes/header.php");
?>
<content>
	<form action="#" method="post">
		<div class="corpo">
			<h2>Adicionar notícia</h2>
	<label for="titulo-noticia">
		<input type="text" name="titulo-noticia" placeholder="Título da Notícia" autocomplete="off">
	</label>
	<label for="descricao-noticia">
		<input type="text" name="descricao-noticia" placeholder="Descrição da Notícia" autocomplete="off">
	</label>
	<label for="categoria">
		<select name="categoria">
			<option value="1">Campanhas</option>
			<option value="2">Sobre o Painel</option>
			<option value="3">Autor</option>
			<option value="4">Produtos</option>
		</select>
	</label>
	<label for="imagem-noticia">
		<input type="file" accept="image/*" name="imagem-noticia" />
	</label>
	<label for="texto">
		<textarea name="texto" placeholder="Digite aqui o texto da notícia"></textarea>
	</label>
			<button>Enviar notícia</button>
		</div>
	</form>
	<div class="noticias">
		<h2 class="title">Notícias no ar</h2>
		<div class="container">
			<div class="imagem"><img src="assets/images/facebook.png"></div>
			<div class="titulo"><h1>Esse é o titulo da primeira notícia</h1></div>
			<div class="descricao"><h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a est quis est luctus maximus laoreet vitae velit. Pellentesque rhoncus ut magna lacinia vehicula.</h1></div>
			<div class="categoria"><h1><i class="far fa-id-badge"></i> Campanhas</h1></div>
			<div class="buttons">
				<a href="#"><i class="far fa-edit" azul-edit title="Editar notícia"></i></a>
				<a href="#" onclick="window.confirm('Você deseja excluir essa notícia?')"><i class="far fa-trash-alt" vermelho title="Excluir notícia"></i></a>
			</div>
		</div>

		<div class="container">
			<div class="imagem"><img src="assets/images/google-shopping.png"></div>
			<div class="titulo"><h1>Esse é o titulo da segunda notícia</h1></div>
			<div class="descricao"><h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a est quis est luctus maximus laoreet vitae velit. Pellentesque rhoncus ut magna lacinia vehicula.</h1></div>
			<div class="categoria"><h1><i class="far fa-id-badge"></i> Campanhas</h1></div>
			<div class="buttons">
				<a href="#"><i class="far fa-edit" azul-edit title="Editar notícia"></i></a>
				<a href="#" onclick="window.confirm('Você deseja excluir essa notícia?')"><i class="far fa-trash-alt" vermelho title="Excluir notícia"></i></a>
			</div>
		</div>
	</div>
</content>
</body>
</html>