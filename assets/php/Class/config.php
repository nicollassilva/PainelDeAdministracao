<?php

function conn($db_host = 'localhost', $db_user = 'root', $db_pass = '', $db_name = 'ecommerce') {

	$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if(!$connection) {
		echo "Falha ao conectar ao banco de dados! <br>" . mysqli_connect_error();
	}

	return $connection;
}

require_once("Query.class.php");