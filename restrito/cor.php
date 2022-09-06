<?php
	header("Location: config.php");

	$cor = $_POST['corSelect'];

	setcookie('corCookie',$cor);
?>