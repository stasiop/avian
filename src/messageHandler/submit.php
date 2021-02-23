<?php	
		$data_file = fopen("message.txt", "a+");
		$message = $_POST["message"];
		if (isset($_COOKIE['user'])) {
			$name = "Anon (" . $_COOKIE['user'] . ")";
		} else {
			$name = "Anon";
		}
		$text_to_write = $name . ": " . $message . "\n";
		fwrite($data_file, $text_to_write);
		fclose($data_file);
		header('Location: /anonchat.php');
?>
