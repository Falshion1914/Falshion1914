<?php
	$one_params = htmlspecialchars($_POST['InpValue']);
	$UserId = htmlspecialchars($_POST['Id']);
	if(isset($one_params)){
		$f = fopen('message.txt', 'a');
		fwrite($f, $UserId." : ".$one_params."<br>");
		fclose($f);
		echo file_get_contents("message.txt");
	}
?>