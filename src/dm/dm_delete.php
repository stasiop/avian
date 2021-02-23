<?php
unlink($_COOKIE["user"] . ".txt");
header('Location: /accountScreen.php');
?>