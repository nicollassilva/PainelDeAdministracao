<?php

	session_start();

	require_once("Query.class.php");

	$tipo = $_POST['form_name'];

	$tipo = htmlspecialchars($_POST['form_name']);

	$tipo = strip_tags($_POST['form_name']);


class Pessoa extends Query {

	public function forms($tipo) {

		if($tipo === 'cadastro') { /* COMEÇO FUNÇÃO CADASTRO */

			$erro = false;

				if((empty($_POST['username'])) || 
					(empty($_POST['tipoPessoa'])) || 
					(empty($_POST['email'])) || 
					(empty($_POST['pass'])) || 
					(empty($_POST['con-pass'])) || 
					(empty($_POST['datenasc'])) || 
					(empty($_POST['sexo']))) {
					
					$erro = "Campo em branco. Primeira verificação";

					echo $erro;

				} else {

				foreach($_POST as $chave => $valor) {

					if(empty($valor)) {

					$erro = "Campo em branco. Segunda verificação.";

					echo $erro;

				} else {

					$valor = trim(strip_tags($valor));
					$username = (string) trim(strip_tags($_POST['username']));
					$tipoPessoa =  (int) $_POST['tipoPessoa'];
					$email = (string) trim(strip_tags($_POST['email']));
					$pass = $_POST['pass'];
					$conPass = $_POST['con-pass'];
					$data = $_POST['datenasc'];
					$sexo = (string) $_POST['sexo'];
					$ip = $_SERVER["REMOTE_ADDR"];

				}

				if ((!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) && $erro) {

					 $erro = 'O campo email precisa de um endereço válido.';

					 echo $erro;

				} else if ($pass !== $conPass) {

					$erro = "Senhas não batem.";

					echo $erro;

				} else {

					$pass = md5($pass);

				}

				if(isset($email)) {

					$verificacao = self::querySelect('usuarios', '*', "WHERE email = '$email' LIMIT 1");

					if($verificacao) {

					 $erro = 'O email já foi registrado.';

					 echo $erro;

					}

				}

				if(isset($username) && strlen($username) < 10) {

					$erro = 'Digite o nome completo';

					echo $erro;

				}
			}

			if(!$erro) {

			self::queryInsert('usuarios', 'nome_completo, tipoPessoa, email, pass, data_nascimento, sexo, ip', "'$username', '$tipoPessoa', '$email', '$pass', '$data', '$sexo', '$ip'", "../../index.php");
			$_SESSION['inserido']="Cadastro inserido com sucesso!";

			}
		}
	} /* FIM FUNÇÃO CADASTRO */

		if($tipo === 'login') {


		if((isset($_POST['email'])) & (isset($_POST['pass']))) {

			$email = trim(strip_tags($_POST['email']));

			$pass = md5($_POST['pass']);

			$resultado = self::querySelect('usuarios', '*', "WHERE (email = '$email' && pass = '$pass') LIMIT 1");

			if(isset($resultado)) {

				$_SESSION['id'] = $resultado['id'];

				header("Location: ../../index.php");

			} else {

			header("Location: ../../login.php?error");
		}

	} else {

		header("Location: ../../login.php");
	
	}

		}

	}

}

$form = new Pessoa;
$form->forms($tipo);