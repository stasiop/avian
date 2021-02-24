<?php
session_start();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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
    $uploadOk = 0;
  }
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
		if (isset($_COOKIE['user'])) {
			$name = "Anon (" . $_COOKIE['user'] . ")";
		} else {
			$name = "Anon";
		}
		$data_file = fopen("../dm/" . $_SESSION['DMnum'] . ".html", "a+");
		$text_to_write = $name . ': <img src="/src/messageHandler/uploads/' . basename($_FILES["fileToUpload"]["name"]) . '" width="50%" height="50%"><br>';
		fwrite($data_file, $text_to_write);
		fclose($data_file);
		header('Location: /src/dm/dm_finder.php');
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}
?>
