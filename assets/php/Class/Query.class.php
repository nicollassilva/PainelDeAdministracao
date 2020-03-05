<?php 

	require_once ("config.php");
	//header("Location: ../../index.php");

class Query {

	public static function queryInsert($table, $paramers, $vparamers, $location) {

		$resultado = mysqli_query(conn(), "INSERT INTO $table ($paramers) VALUES ($vparamers)");

		if ($resultado) {

			header("Location: $location");
			die();

		} else {

			return false;

		}
	}

	public static function querySelect($table, $paramer, $condition) {

	$resultado = mysqli_query(conn(), "SELECT $paramer FROM $table $condition");

	if ($resultado) {

			while($resu = mysqli_fetch_assoc($resultado)) {

				return $resu;

			}

		} else { 

			return false; 

		}
	}

	public static function queryDelete($table, $condition, $item) {

	$resultado = mysqli_query(conn(), "DELETE FROM $table WHERE $condition = $item");

	if ($resultado) {

		echo "Deletou";

		} else {

			echo "Não deletou"; 
		
		}
	}
}