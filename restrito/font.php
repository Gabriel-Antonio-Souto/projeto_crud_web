<?php
	header("Location: config.php");

	$font = $_POST['fontSelect'];

	setcookie('fontCookie',$font);
	
?>
