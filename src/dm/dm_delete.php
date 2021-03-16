<?php
if (isset($_COOKIE['pamuser'])){
    $ufname = $_COOKIE['pamuser'];
    $sfname = base64_decode($ufname);
    $name = substr($sfname, 0, -6); #0000
} else {
    $name = "Anon";
}

unlink($name . ".html");
header('Location: /accountScreen.php');
?>
