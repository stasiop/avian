<?php
session_start();
                if (isset($_COOKIE['pamuser'])){
                        $ufname = $_COOKIE['pamuser'];
                        $sfname = base64_decode($ufname);
                        $name = substr($sfname, 0, -6); #0000
                } else {
                        $name = "Anon";
                }
$data_file = fopen($_SESSION['DMnum'] . ".html", "a+");
$message = $_POST["message"];
$text_to_write = $name . ": " . $message . "<br>";
fwrite($data_file, $text_to_write);
fclose($data_file);
header('Location: dm_finder.php');
?>
