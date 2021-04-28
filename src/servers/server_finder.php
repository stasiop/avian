<table style="width:100%">
<?php
session_start();
$servername = "127.0.0.1";
$DBusername ="root"; 
$DBpassword= ""; // blanked for source 
$DBname = "server_nfo";

$con = mysqli_connect($servername, $DBusername, $DBpassword, $DBname);

if(!$con){
    die("mysql has sh*t the bin :" . mysqli_connect_error());
}
$current_server = 9;
$sql = "SELECT server_users FROM MyGuests WHERE server_id LIKE " . $current_server;
$result = mysqli_query($con, $sql);
echo $result;
?>
