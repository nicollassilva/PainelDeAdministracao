<?php
	session_start();
$loginpadrao = 'teste@user.com.br';
$senhapadrao = 'testeuserpainel';

if((isset($_POST['email'])) && (isset($_POST['senha']))) {
	$login = $_POST['email'];
	$senha = $_POST['senha'];
}

if(($login === $loginpadrao) && ($senha === $senhapadrao)) {
	header("Location: ../../painel/index.php");
} else {
	header("Location: ../../index.php");
}
