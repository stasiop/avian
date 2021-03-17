<?php
session_start();
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
    $uploadOk = 0;
  }
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                if (isset($_COOKIE['pamuser'])){
                        $ufname = $_COOKIE['pamuser'];
                        $sfname = base64_decode($ufname);
                        $name = substr($sfname, 0, -6); #0000
                } elseif (isset($_COOKIE['user'])) { //what the fuck did you do??? are you aware that the cookie user is also set at accountScreen if not at PAM? it can try to decode a string of rndm numbers.
                        $name = $_COOKIE['user'];
                } else {
                        $name = "Anon";
                }
                $data_file = fopen("../dm/" . $_SESSION['DMnum'] . ".html", "a+");
                $text_to_write = "<br>" . $name . ':<br> <img src="/src/messageHandler/uploads/' . $renamefileto . '">';
                fwrite($data_file, $text_to_write);
                fclose($data_file);

                header('Location: /src/dm/dm_finder.php');
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}
?>

