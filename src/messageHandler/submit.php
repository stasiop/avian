<?php
	
	fucntion saveFile(){
	STATIC $id = 00000; // id system
	$data_file = fopen("message.txt", "a+"); 
	$name = $_POST["name"]; 
	$message = $_POST["message"];
	$text_to_write = $id . "Anon "  . $name . ": " . $message . ";";
	fwrite($data_file, $text_to_write);
	fclose($data_file);
	header('Location: /anonchat.php');
	$id++;
	}
?>
