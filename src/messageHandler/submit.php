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
		//echo "GodFuckHereGoesInt";
		//(int)readfile("WouldntItBeNiceToDie.txt");
		$idInt=(int)file_get_contents("WouldntItBeNiceToDie.txt");
		//echo $idInt;

		//echo $idContents;
		//echo $idContents;
		//$idInt=(int)$idContents;
		//echo $idInt;
		$idInt++;
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
                if(strpos($message, "<") !== false){
                echo "<h1>Dissallowed character</h1><br><hr><p>The character "<" is illegal due to exploits, for alternatives look at<br>our formatting help, thank you</p>";
                } else {
              if(empty(explode("(quote)", $message)) == false){
                  $text_quoted=explode("(quote)", $message);
                  if(isset($text_quoted[1])){
                  $text_quoted[1]='<b class="quote">>' . $text_quoted[1];
                  } else {$text_quoted[1]="<b>" . $text_quoted[1];}
                  $message = $text_quoted[0] . $text_quoted[1];
                  if(empty(explode("(/quote)", $message)) == false){
                  $textquoted = explode("(/quote)", $message);
                  $message = $textquoted[0] . '</b>  ' . $textquoted[1];
                  } else {
                  $message = $message . '</b>';
                  }
              }
                if (empty(explode("(br)", $message)) == false){
		if (substr_count($message,"(br)") > 1){header('Location: /anonchat.php');}else{
                $textquoted = explode("(br)", $message);
                $message = $textquoted[0] . '<br>    ' . $textquoted[1];
                }
		}
                $text_to_write = "<br>" . $name . ": " . $message;
                fwrite($data_file, $text_to_write);
                echo "\n" . $message;		
		fclose($idFileRead);
		echo "After +1 Has Been Applied";
		echo (string) $idInt;
		echo gettype((string) $idInt);
		$idFile=fopen("WouldntItBeNiceToDie.txt","w+");
		fwrite($idFile,(string)$idInt);
		
		fclose($idFile);
                fclose($data_file);
		
                header('Location: /anonchat.php');
                }
                }

?>
