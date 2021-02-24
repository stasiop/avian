<?php	
		$data_file = fopen("message.txt", "a+");
		$message = $_POST["message"];
		$idFile=fopen("id.txt","w+");
		$id=(int)$idFile;
		echo $id;
		$id=$id+1;
		echo $id;
		fwrite($idFile,$id);
		fclose($idFile);
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
