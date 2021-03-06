<?php
session_start();
$_SESSION["DMnum"] = $_POST["DMnum"];
if(!isset($_COOKIE["user"]) && !isset($_COOKIE["pamuser"])) {
        echo "YOU FOOL, YOUR COOKIE ISN'T SET";
} else {
        if (isset($_COOKIE['pamuser'])) { $user=$_COOKIE['pamuser']; } elseif (isset($_COOKIE['user'])) { $user=$_COOKIE['user']; }
        if (file_exists($user . ".html")) {
                echo "The file exists";
        } else {
                echo "doesn't exist (";
                echo $user . ".html)\n";
                $myfile = fopen($user . ".html", "a+") or die("\nUnable to create file!");
                $txt = "";
                fwrite($myfile, $txt);
                fclose($myfile);
        }
}
$_SESSION["bdm"] = $user;
header ('Location: dm_finder.php');
?>
