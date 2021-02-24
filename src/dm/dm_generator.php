<?php
session_start();
$_SESSION["DMnum"] = $_POST["DMnum"];
if(!isset($_COOKIE["user"])) {
        echo "YOU FOOL, YOUR COOKIE ISN'T SET";
} else {
        if (file_exists($_COOKIE["user"] . ".html")) {
                echo "The file exists";
        } else {
                echo "doesn't exist (";
                echo $_COOKIE["user"] . ".html)\n";
                $myfile = fopen($_COOKIE["user"] . ".html", "a+") or die("\nUnable to create file!");
                $txt = "";
                fwrite($myfile, $txt);
                fclose($myfile);
        }
}
$_SESSION["bdm"] = $_COOKIE["user"];
header ('Location: dm_finder.php');
?>
