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
		if (isset($_COOKIE['pamuser'])){
			$ufname = $_COOKIE['pamuser'];
			$sfname = base64_decode($ufname);
			$name = substr($sfname, 0, -6);	#0000
		} elseif (isset($_COOKIE['user'])) { //what the fuck did you do??? are you aware that the cookie user is also set at accountScreen if not at PAM? it can try to decode a string of rndm numbers.
			//$name = $_COOKIE['user'];
			$name="Anon";
		} else {
			$name = "Anon";
		}

		$text_to_write = "<br>" . $name . ": " . $message;
		if(strlen($text_to_write)<250){
              if(empty(explode(">", $text_to_write)) == false){
              $text_quoted=explode(">", $text_to_write);
              $text_quoted[2]="<br>><b>" . $text_quoted[2] . "</b>";
              $text_to_write=$text_quoted[1] . $text_quoted[2];
              }
		fwrite($data_file, $text_to_write);
		}
		fclose($data_file);
		header('Location: /anonchat.php');
?>
