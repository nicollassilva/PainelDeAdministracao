<?php
	session_start();
	unset( $_SESSION['email'],
		   $_SESSION['senha']
	);
	header("Location: ../index.php");
?>