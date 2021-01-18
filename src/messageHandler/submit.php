<?php
	$data_file = fopen("message.txt", "a+");
	$name = $_POST["name"];
	$message = $_POST["message"];
	$text_to_write = $name . ": " . $message . "\n";
	fwrite($data_file, $text_to_write);
	fclose($data_file);
?>
