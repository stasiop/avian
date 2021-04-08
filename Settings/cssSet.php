<?php
$selected=&_POST['theme'];
switch ($selected) {
  case "W&B":
    setcookie("style", "W&B", time() + (86400 * 365 * 4), "/"); // 86400 = 1 day
    break;
  case "P&P":
    setcookie("style", "W&B", time() + (86400 * 365 * 4), "/"); // 86400 = 1 day
    break;
  case "def":
    setcookie("style", "", time() + (86400 * 365 * 4), "/"); // 86400 = 1 day
    break;
}
header('Location: CSSEditor.php');
?>
