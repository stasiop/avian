<?php

	function saveFile(){
	$ID = 0
	$data_file = fopen("message.txt", "a+");
	$name = $_POST["name"];
	$message = $_POST["message"];
	$text_to_write = $ID . " " . "Anon "  . $name . ": " . $message . ";";

	fwrite($data_file, $text_to_write);
	fclose($data_file);
	header('Location: /anonchat.html');
	}
	saveFile();
?>
