<?php
session_start();
$name = $_COOKIE['user']
$data_file = fopen("/src/dm/" . $_SESSION['DMnum'] . ".txt", "a+");
$message = $_POST["message"];
$text_to_write = $name . ": " . $message . "\n";
fwrite($data_file, $text_to_write);
fclose($data_file);
header('Location: /src/dm/dm_finder.php');
?>
