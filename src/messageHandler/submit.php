<?php	
		$data_file = fopen("message.html", "a+");
		$message = $_POST["message"];
		$idFile=fopen("id.txt","w+");
		//$idContents=file_get_contents("ids.txt",true);
		//echo $idContents;
		$fileName="id.txt";
		$idFileRead=fopen($fileName,"r");
		$idContents=fread($idFileRead,"1024");
		$idInt=(int)$idContents;
		echo $idInt;
		$idInt++;
		echo $idInt;
		fwrite($idFile,$idInt);
		fclose($idFile);
		fclose($idFileRead);
		
		//echo file_get_contents("id.txt");
		//$id=(int)$idFile;
		//echo $id;
		//$id=$id+1;
		//echo $id;
		//fwrite($idFile,$id);
		//fclose($idFile);
		if (isset($_COOKIE['Username'])) {
			$ufname = $_COOKIE['Username'];
			$sfname = base64_decode($ufname)
			$name = substr($sfname, -5)
			
		} else {
			$name = "Anon";
		}
		$text_to_write = $name . ": " . $message . "<br>";
		fwrite($data_file, $text_to_write);
		fclose($data_file);
		header('Location: /anonchat.php');
?>
