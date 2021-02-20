<?php
    extract($_REQUEST);
    $file=fopen("Registar.txt","a+");

    fwrite($file,"name :");
    fwrite($file, $username ."\n");
    fwrite($file,"Password :");
    fwrite($file, $password ."\n");
    fclose($file);
    header("location: PAMRver10.php");
 ?>
