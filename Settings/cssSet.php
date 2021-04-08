<?php
setcookie("style", "", time() + (86400 * 365 * 4), "/"); // 86400 = 1 day
$selected=$_POST['theme'];
switch ($selected) {
  case "W&B":
    $_COOKIE["style"]="W&B";
    break;
  case "P&P":
    $_COOKIE["style"]="P&P";
    break;
  case "def":
    $_COOKIE["style"]="";
    break;
}
header('Location: CSSEditor.php');
?>
