<?php
	$idUser = $_POST["Id"];
	$idUser = htmlspecialchars($idUser);
	$f = fopen('user.txt', 'a');
	fwrite($f, $idUser."\r\n");
	fclose($f);
?>