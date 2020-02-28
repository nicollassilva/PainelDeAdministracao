<?php
	session_start();
	include("assets/pages/includes/header.php");
?>
<content>
	<form action="#" method="post">
		<div class="corpo">
			<h2>Adicionar slide</h2>
	<label for="titulo">
		<input type="text" name="titulo-slide" placeholder="Título do Slide" autocomplete="off">
	</label>
	<label for="descricao">
		<input type="text" name="descricao-slide" placeholder="Descrição do Slide" autocomplete="off">
	</label>
	<label for="link">
		<input type="text" name="link-slide" placeholder="URL do Slide" autocomplete="off">
	</label>
	<label for="imagem">
		<input type="file" accept="image/*" name="imagem" />
	</label>
			<button>Enviar</button>
		</div>
	</form>
	<div class="slides">
		<h2 class="title">Slides ativados</h2>
		<div class="slide">
			<div class="imagem">
				<img src="assets/images/slide1.jpg">
			<div class="titulo"><h1>Esse é o titulo do primeiro slide</h1></div>
			</div>
			<div class="buttons">
				<a href="#"><i class="far fa-edit" azul-edit title="Editar slide"></i></a>
				<a href="#" onclick="window.confirm('Você deseja excluir esse slide?')"><i class="far fa-trash-alt" vermelho title="Excluir slide"></i></a>
			</div>
		</div>

		<div class="slide">
			<div class="imagem">
				<img src="assets/images/slide2.jpg">
					<div class="titulo"><h1>Esse é o titulo do segundo slide</h1></div>
			</div>
			<div class="buttons">
				<a href="#"><i class="far fa-edit" azul-edit title="Editar slide"></i></a>
				<a href="#" onclick="window.confirm('Você deseja excluir esse slide?')"><i class="far fa-trash-alt" vermelho title="Excluir slide"></i></a>
			</div>
		</div>
	</div>
</content>