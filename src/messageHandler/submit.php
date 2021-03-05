<?php	
		$data_file = fopen("message.html", "a+");
		$message = $_POST["message"];
		
		//$idContents=file_get_contents("ids.txt",true);
		//echo $idContents;
		//$fileName="WouldntItBeNiceToDie.txt";
		//echo readfile("WouldntItBeNiceToDie.txt");
		//echo readfile("GODFUCKPHP.txt");
		$idFileRead=fopen("WouldntItBeNiceToDie.txt","r+");
		$idContents=readfile("WouldntItBeNiceToDie.txt");
		echo "GodFuckHereGoesInt";
		//(int)readfile("WouldntItBeNiceToDie.txt");
		$idInt=(int)file_get_contents("WouldntItBeNiceToDie.txt");
		echo $idInt;

		//echo $idContents;
		//echo $idContents;
		//$idInt=(int)$idContents;
		//echo $idInt;
		$idInt++;
		fclose($idFileRead);
		echo "After +1 Has Been Applied";
		echo (string) $idInt;
		echo gettype((string) $idInt);
		$idFile=fopen("WouldntItBeNiceToDie.txt","w+");
		fwrite($idFile,(string)$idInt);
		
		fclose($idFile);
		
		//echo file_get_contents("WouldntItBeNiceToDie.txt");
		//$id=(int)$idFile;
		//echo $id;
		//$id=$id+1;
		//echo $id;
		//fwrite($idFile,$id);
		//fclose($idFile);
		if (isset($_COOKIE['user'])) {
			$ufname = $_COOKIE["user"];
			$sfname = base64_decode($ufname);
			$name = substr($sfname, 0, -6);	#0000
		} else {
			$name = "Anon";
		}

		$text_to_write = "<br>" . $name . ": " . $message;
		if(strlen($text_to_write)<250){
		fwrite($data_file, $text_to_write);
		}
		fclose($data_file);
		header('Location: /anonchat.php');
?>
