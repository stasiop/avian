<?php
$servername = "127.0.0.1";
$DBusername ="root"; 
$DBpassword= ""; // blanked for source 
$DBname = "server_nfo";

$con = mysqli_connect($servername, $DBusername, $DBpassword, $DBname);

if(!$con){
    die("mysql has sh*t the bin :" . mysqli_connect_error());
}
?>
