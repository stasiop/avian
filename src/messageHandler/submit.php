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

                if(strlen($message)<250){
              if(empty(explode(">", $message)) == false){
                  $text_quoted=explode(">", $message);
                  if(isset($text_quoted[1])){
                  $text_quoted[1]="<b class="quote">>" . $text_quoted[1] . "</b>";
                  } else {$text_quoted[1]="<b>" . $text_quoted[1] . "</b>";}
                  $message = $textquoted[0] . $text_quoted[1];
              }
                $text_to_write = "<br>" . $name . ": " . $text_quoted[0] . $text_quoted[1];
                fwrite($data_file, $text_to_write);
                echo "\n" . $message;
                }
                fclose($data_file);
                header('Location: /anonchat.php');

?>
