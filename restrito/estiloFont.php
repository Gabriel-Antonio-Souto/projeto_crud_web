<?php
	header("Location: config.php");

	$estiloFont = $_POST['estiloFontSelect'];

	setcookie('estiloFontCookie',$estiloFont);
	
?>
