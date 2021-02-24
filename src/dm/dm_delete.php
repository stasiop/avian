<?php
unlink($_COOKIE["user"] . ".html");
header('Location: /accountScreen.php');
?>
