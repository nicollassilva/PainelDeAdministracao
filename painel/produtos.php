<?php
	session_start();
	include("assets/pages/includes/header.php");
?>
<content>
	<form action="#" method="post">
		<div class="corpo">
			<h2>Adicionar produto</h2>
	<label for="titulo-produto">
		<input type="text" name="titulo-produto" placeholder="Título do Produto" autocomplete="off">
	</label>
	<label for="descricao-produto">
		<input type="text" name="descricao-produto" placeholder="Descrição do Produto" autocomplete="off">
	</label>
	<label for="categoria">
		<select name="categoria">
			<option value="1">Sapatos</option>
			<option value="2">Camisas Sociais</option>
			<option value="3">Bermudas</option>
			<option value="4">Calças</option>
			<option value="5">Camisetas</option>
			<option value="6">Chinelos</option>
			<option value="7">Óculos</option>
		</select>
	</label>
	<label for="preco-produto">
		<input type="number" name="preco-produto" placeholder="Preço sem R$" autocomplete="off">
	</label>
	<label for="promocao-produto">
		<input type="number" name="promocao-produto" placeholder="Quantidade de desconto">
	</label>
	<label for="imagem-noticia">
		<input type="file" accept="image/*" name="imagem-noticia" />
	</label>
			<button>Cadastrar produto</button>
		</div>
	</form>
	<div class="produtos">
		<h2 class="title">
			Produtos
			<label for="categoria">
				<select name="categoria">
					<option value="1">Sapatos</option>
					<option value="2">Camisas Sociais</option>
					<option value="3">Bermudas</option>
					<option value="4">Calças</option>
					<option value="5">Camisetas</option>
					<option value="6">Chinelos</option>
					<option value="7">Óculos</option>
				</select>
			</label>
		</h2>

		<div class="produto">
			<div class="imagem">
				<img src="assets/images/produto1.jpg">
			</div>
				<div class="categoria">
					<h2><i class="far fa-id-badge"></i> Calças</h2>
				</div>
				<div class="buttons">
					<a href="#"><i class="far fa-edit" azul-edit title="Editar produto"></i></a>
					<a href="#" onclick="window.confirm('Você deseja excluir esse produto?')"><i class="far fa-trash-alt" vermelho title="Excluir produto"></i></a>
				</div>
			</div>

		<div class="produto">
			<div class="imagem">
				<img src="assets/images/produto2.jpg">
			</div>
				<div class="categoria">
					<h2><i class="far fa-id-badge"></i> Camisetas</h2>
				</div>
				<div class="buttons">
					<a href="#"><i class="far fa-edit" azul-edit title="Editar produto"></i></a>
					<a href="#" onclick="window.confirm('Você deseja excluir esse produto?')"><i class="far fa-trash-alt" vermelho title="Excluir produto"></i></a>
				</div>
			</div>

		<div class="produto">
			<div class="imagem">
				<img src="assets/images/produto3.jpg">
			</div>
				<div class="categoria">
					<h2><i class="far fa-id-badge"></i> Camisas sociais</h2>
				</div>
				<div class="buttons">
					<a href="#"><i class="far fa-edit" azul-edit title="Editar produto"></i></a>
					<a href="#" onclick="window.confirm('Você deseja excluir esse produto?')"><i class="far fa-trash-alt" vermelho title="Excluir produto"></i></a>
				</div>
			</div>

		<div class="produto">
			<div class="imagem">
				<img src="assets/images/produto4.jpg">
			</div>
				<div class="categoria">
					<h2><i class="far fa-id-badge"></i> Camisas sociais</h2>
				</div>
				<div class="buttons">
					<a href="#"><i class="far fa-edit" azul-edit title="Editar produto"></i></a>
					<a href="#" onclick="window.confirm('Você deseja excluir esse produto?')"><i class="far fa-trash-alt" vermelho title="Excluir produto"></i></a>
				</div>
			</div>

		</div>
</content>