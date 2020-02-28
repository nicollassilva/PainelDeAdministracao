<?php
	session_start();
	include("assets/pages/includes/header.php");
?>
<content>
	<form action="#" method="post">
		<div class="corpo">
			<h2>Adicionar parceiro</h2>
	<label for="titulo-parceiro">
		<input type="text" name="nome-parceiro" placeholder="Nome do Parceiro" autocomplete="off">
	</label>
	<label for="link-parceiro">
		<input type="text" name="link-parceiro" placeholder="URL do Parceiro" autocomplete="off">
	</label>
	<label for="imagem-parceiro">
		<input type="file" accept="image/*" name="imagem-parceiro" />
	</label>
			<button>Enviar</button>
		</div>
	</form>
	<div class="parceiros">
		<h2 class="title">Parceiros ativos</h2>

		<div class="parceiro">
			<div class="imagem">
				<img src="assets/images/google-shopping.png">
			<div class="titulo"><h1>Parceiro: Google Shopping</h1></div>
			</div>
			<div class="buttons">
				<a href="#"><i class="far fa-edit" azul-edit title="Editar informações"></i></a>
				<a href="#"  onclick="window.confirm('Você deseja excluir esse parceiro?')"><i class="far fa-trash-alt" vermelho title="Excluir parceiro"></i></a>
			</div>
		</div>

		<div class="parceiro">
			<div class="imagem">
				<img src="assets/images/facebook.png">
			<div class="titulo"><h1>Parceiro: Facebook</h1></div>
			</div>
			<div class="buttons">
				<a href="#"><i class="far fa-edit" azul-edit title="Editar informações"></i></a>
				<a href="#"  onclick="window.confirm('Você deseja excluir esse parceiro?')"><i class="far fa-trash-alt" vermelho title="Excluir parceiro"></i></a>
			</div>
		</div>

	</div>
</content>