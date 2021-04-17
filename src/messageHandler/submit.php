<?php	
		$data_file = fopen("message.php", "a+");
		$message = $_POST["message"];
		$idFileRead=fopen("WouldntItBeNiceToDie.txt","r+");
		$idContents=readfile("WouldntItBeNiceToDie.txt");
		$idInt=(int)file_get_contents("WouldntItBeNiceToDie.txt");
		$idInt++;
		if (isset($_COOKIE['pamuser'])){
			$ufname = $_COOKIE['pamuser'];
			$sfname = base64_decode($ufname);
			$name = substr($sfname, 0, -6);	#0000
		} elseif (isset($_COOKIE['user'])) {
			$name="Anon";
		} else {
			$name = "Anon";
		}
		if (isset($_POST['message'])){formatCheck();}
                if (isset($_POST['fileToUpload'])){imageUpload();}
                fwrite($data_file, $text_to_write);
                echo "<br>Your message was: " . $message . "<br>";
                fclose($idFileRead);
                echo "The ID for this message is: " . (string) $idInt . "<br>";
                $idFile=fopen("WouldntItBeNiceToDie.txt","w+");
                fwrite($idFile,(string)$idInt);

                fclose($idFile);
                fclose($data_file);

                header('Location: /anonchat.php');
		
		function imageUpload(){
			$target_dir = "uploads/";
			setFileName:
			$renamefileto = rand(0,2738912);
			break;
			if (file_exists("uploads/" . $renamefileto)){goto setFileName;}
			$target_file = $target_dir . $renamefileto;
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($_POST["fileToUpload"])) {
			  	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			  	if($check !== false) {
			    		echo "File is an image - " . $check["mime"] . ".";
			    		$uploadOk = 1;
					$uploadType = 1;
			  	} else {
			    		echo "File is not an image.";
			  		$uploadOk = 0; // stan why is this not a bool
					$uploadType = 0;
				}
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
					if ($uploadType == 1){
						$text_to_write = $text_to_write . '<br> <img src="/src/messageHandler/uploads/' . $renamefileto . '">';
					}
				} else {
					echo "There was an error uploading your file";
				}
		}
		
		function formatCheck(){ //check for specific characters and strings
			if(strlen($message)<250){
				if(strpos($message, "<") !== false){
					echo "<h1>Dissallowed character</h1><br><hr><p>The character "<" is illegal due to exploits, for alternatives look at<br>our formatting help, thank you</p>";
				} else {
				if(strpos($message, "(quote)") !== false){
					$text_quoted=explode("(quote)", $message);
					if(isset($text_quoted[1])){
						$text_quoted[1]='<b class="quote">>' . $text_quoted[1];
					} else {$text_quoted[1]="<b>" . $text_quoted[1];}
					$message = $text_quoted[0] . $text_quoted[1];
					if(strpos($message, "(/quote)") !== false){
						$textquoted = explode("(/quote)", $message);
						$message = $textquoted[0] . '</b>  ' . $textquoted[1];
					} else {
						$message = $message . '</b>';
					}
					$total = "<br>" . $name . ": " . $message;
					$edited=1;
				}
				if (strpos($message, "(br)") !== false){
					if (substr_count($message,"(br)") > 1){header('Location: /anonchat.php');}else{
						$textquoted = explode("(br)", $message);
						$message = $textquoted[0] . '<br>' . $textquoted[1];
						$total = "<br>" . $name . ": " . $message;
						$edited=1;
					}
				}
				if ($edited==1){
					$text_to_write = $total;
				} else {
					$text_to_write = "<br>" . $name . ": " . $message;
				}
			}
                }
                }

?>

