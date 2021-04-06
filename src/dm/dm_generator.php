<?php
session_start();
$_SESSION["DMnum"] = $_POST["DMnum"];
if(!isset($_COOKIE["user"]) && !isset($_COOKIE["pamuser"])) {
        echo "YOU FOOL, YOUR COOKIE ISN'T SET";
} else {
        if (isset($_COOKIE['pamuser'])) { $user = substr(base64_decode($_COOKIE['pamuser']), 0, -6); } elseif (isset($_COOKIE['user'])) { $user=$_COOKIE['user']; }
        if (file_exists($user . ".html")) {
                echo "The file exists";
        } else {
                echo "doesn't exist (";
                echo $user . ".html)\n";
                $myfile = fopen($user . ".html", "a+") or die("\nUnable to create file!");
                $txt = "<style>
                * {
                color: white;
                }
                img {
                max-width:250px;
                max-height:250px;
                }
                img:hover {
                max-width:500px;
                max-height:500px;
                }
                .quote {
                color:lime;
                }
                </style>
                ";
                fwrite($myfile, $txt);
                fclose($myfile);
                chown($user . ".html", "www-data");
        }
}
$_SESSION["bdm"] = $user;
header ('Location: dm_finder.php');
?>
