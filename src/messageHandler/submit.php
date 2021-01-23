<?php

	function saveFile(){
	$IDfile = fopen("id.txt")
	$IDfile = (int) $ID;
	$ID++;
	$data_file = fopen("message.txt", "a+");
	$name = $_POST["name"];
	$message = $_POST["message"];
	$text_to_write = $ID . " " . "Anon "  . $name . ": " . $message . ";";
	fwrite('id.txt', $ID);
	fwrite($data_file, $text_to_write);
	fclose($data_file);
	header('Location: /anonchat.html');
	}
	saveFile();
?>
