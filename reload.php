<?php
	file_put_contents("file.txt",filesize("message.txt"));
	while(true){
		sleep(5);
		if(file_get_contents("file.txt") !== filesize("message.txt")){
			file_put_contents("file.txt",filesize("message.txt"));
			echo file_get_contents("message.txt");
			break;
		}
		echo file_get_contents("file.txt");
		echo filesize("message.txt");
	}
?>