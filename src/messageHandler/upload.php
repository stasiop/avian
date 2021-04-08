<?php
$target_dir = "uploads/";
$renamefileto = rand(0,2738912);
$target_file = $target_dir . $renamefileto;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0; // stan why is this not a bool
  }
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
		$idFileRead=fopen("WouldntItBeNiceToDie.txt","r+");
		$idContents=readfile("WouldntItBeNiceToDie.txt");
		echo "GodFuckHereGoesInt";
		$idInt=(int)file_get_contents("WouldntItBeNiceToDie.txt");
		echo $idInt;
		$idInt++;
		fclose($idFileRead);
		echo "After +1 Has Been Applied";
		echo (string) $idInt;
		echo gettype((string) $idInt);
		$idFile=fopen("WouldntItBeNiceToDie.txt","w+");
		fwrite($idFile,(string)$idInt);
		fclose($idFile);
		if (isset($_COOKIE['pamuser'])){
			$ufname = $_COOKIE['pamuser'];
			$sfname = base64_decode($ufname);
			$name = substr($sfname, 0, -6);	#0000
		} else {
			$name = "Anon";
		}
		$data_file = fopen("message.php", "a+");
		$text_to_write = "<br>" . $name . ':<br> <img src="/src/messageHandler/uploads/' . $renamefileto . '">';
		fwrite($data_file, $text_to_write);
		fclose($data_file);
		header('Location: /anonchat.php');
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}
?>
