<?php
if (isset($_COOKIE['style']) == true){echo "poo";} else {
setcookie("style", "def", time() + (86400 * 365 * 4), "/"); echo 'it isnt set';// 86400 = 1 day
}
$selected=$_POST['theme'];
echo $selected;
switch ($selected) {
case "W&B":
            $fCSSC=fopen("../css/StylesheetPresetWhiteAndBlue.css",'r');
            $WANDB=fread($fCSSC);
            fclose($fCSSC);
            $fPCSSR=fopen("../PAMregister/users/".$_SESSION['Username']."/css.css",'w+');
            fwrite($fPCSSR,$WANDB);
            fclose($fPCSSR);
            for($i=0;$i<5;$i++){
                    $fCSSC=fopen("../CSS/Stylesheet".$i."PresetWhiteAndBlue.css",'r');
                    $WANDB=fread($fCSSC);
                    fclose($fCSSC);
                    $fPCSSR=fopen("../PAMregister/users/".$_SESSION['Username'."/css.css",'w+']);
                    fwrite($fPCSSR,$WANDB);
                    fclose($fPCSSR);
            }
        //setcookie("style", "WaB", time() + (86400 * 365 * 4), "/");// 86400 = 1 day
    break;
  case "P&P":
        $fCSSC=fopen("../css/StylesheetPresetPinkAndPink.css",'r');
            $WANDB=fread($fCSSC);
            fclose($fCSSC);
            $fPCSSR=fopen("../PAMregister/users/".$_SESSION['Username']."/css.css",'w+');
            fwrite($fPCSSR,$WANDB);
            fclose($fPCSSR);
            for($i=0;$i<5;$i++){
                    $fCSSC=fopen("../css/Stylesheet".$i."PresetPinkAndPink.css",'r');
                    $WANDB=fread($fCSSC);
                    fclose($fCSSC);
                    fwrite($fPCSSR,$WANDB);
                    fclose($fPCSSR);
            }

    //setcookie("style", "PaP", time() + (86400 * 365 * 4), "/");
    break;
  case "cus":
          $cusCSS=$_POST['CUSTOMCSS'];
          $fPCSSR=fopen("../PAMregister/users/".$_SESSION['Username']."/css.css");
          fwrite($fPCSSR,$cusCSS);
          fclose($fPCSSR);
          for($i=0;$i<5;$i++){
                $cusCSS=$_POST['CUSTOMCSS'.$i];
                $fPCSSR=fopen("../PAMregister/users/".$_SESSION['Username']."/css".$i.".css");
                fwrite($fPCSSR,$cusCSS);
                fclose($fPCSSR);
          }

  case "def":
    $fCSSC=fopen("../CSS/Stylesheet.css",'r');
            $WANDB=fread($fCSSC);
            fclose($fCSSC);
            $fPCSSR=fopen("../PAMregister/users/".$_SESSION['Username']."/css.css",'w+');
            fwrite($fPCSSR,$WANDB);
            fclose($fPCSSR);
            for($i=0;$i<5;$i++){
                    $fCSSC=fopen("../CSS/Stylesheet".$i.".css",'r');
                    $WANDB=fread($fCSSC);
                    fclose($fCSSC);
                    $fPCSSR=fopen("../PAMregister/users/".$_SESSION['Username'."/css.css",'w+']);
                    fwrite($fPCSSR,$WANDB);
                    fclose($fPCSSR);
    }
    break;
}
header('Location: CSSEditor.php');
?>
