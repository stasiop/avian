<?php
if (isset($_COOKIE['style']) == true){echo "poo";} else {
setcookie("style", "def", time() + (86400 * 365 * 4), "/"); echo 'it isnt set';// 86400 = 1 day
}
$selected=$_POST['theme'];
echo $selected;
switch ($selected) {
  case "W&B":
    setcookie("style", "WaB", time() + (86400 * 365 * 4), "/");// 86400 = 1 day
    break;
  case "P&P":
    setcookie("style", "PaP", time() + (86400 * 365 * 4), "/");
    break;
  case "def":
    setcookie("style", " ", time() + (86400 * 365 * 4), "/");
    break;
}
header('Location: CSSEditor.php');
?>
