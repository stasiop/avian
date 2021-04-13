<?php
if (isset($_COOKIE['style']) == true){echo "poo";} else {
setcookie("style", "def", time() + (86400 * 365 * 4), "/"); echo 'it isnt set';// 86400 = 1 day
}
$selected=$_POST['theme'];
echo $selected;
switch ($selected) {
case "W&B":
	    $fCSSC=fopen("../CSS/StylesheetPresetWhiteAndBlue",'r');
	    $WANDB=fread($fCSSC);
	    fclose($fCSSC);    
	    $fPCSSR=fopen("../PAMregister/names/".$_SESSION['Username']."/css.css",'w+');
	    fwrite($fPCSSR,$WANDB);
	    fclose($fPCSSR);
	    for($i=0;$i<5;$i++){
		    $fCSSC=fopen("../CSS/Stylesheet".$i."PresetWhiteAndBlue",'r');
		    $WANDB=fread($fCSSC);
		    fclose($fCSSC);
	            $fPCSSR=fopen("../PAMregister/names/".$_SESSION['Username'."/css.css",'w+']);
		    fwrite($fPCSSR,$WANDB);
		    fclose($fPCSSR);
	    }
        //setcookie("style", "WaB", time() + (86400 * 365 * 4), "/");// 86400 = 1 day
    break;
  case "P&P":
	$fCSSC=fopen("../CSS/StylesheetPresetPinkAndPink",'r');
            $WANDB=fread($fCSSC);
            fclose($fCSSC);
            $fPCSSR=fopen("../PAMregister/names/".$_SESSION['Username']."/css.css",'w+');
            fwrite($fPCSSR,$WANDB);
            fclose($fPCSSR);
            for($i=0;$i<5;$i++){
                    $fCSSC=fopen("../CSS/Stylesheet".$i."PresetPinkAndPink",'r');
                    $WANDB=fread($fCSSC);
                    fclose($fCSSC);
                    $fPCSSR=fopen("../PAMregister/names/".$_SESSION['Username'."/css.css",'w+']);
                    fwrite($fPCSSR,$WANDB);
                    fclose($fPCSSR);
            }

    //setcookie("style", "PaP", time() + (86400 * 365 * 4), "/");
    break;
  case "def":
    sewtcookie("style", " ", time() + (86400 * 365 * 4), "/");
    break;
}
header('Location: CSSEditor.php');
?>
