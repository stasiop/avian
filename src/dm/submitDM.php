<?php
session_start();
                if (isset($_COOKIE['pamuser'])){
                        $ufname = $_COOKIE['pamuser'];
                        $sfname = base64_decode($ufname);
                        $name = substr($sfname, 0, -6); #0000
                } else {
                        $name = "Anon";
                }
$data_file = fopen($_SESSION['DMnum'] . ".html", "a+");
$message = $_POST["message"];
                if(strlen($message)<250){
                if(strpos($message, "<") !== false){
                echo "<h1>Dissallowed character</h1><br><hr><p>The character "<" is illegal due to exploits, for alternatives look at<br>our formatting help, thank you</p>";
                } else {
              if(empty(explode("(quote)", $message)) == false){
                  $text_quoted=explode("(quote)", $message);
                  if(isset($text_quoted[1])){
                  $text_quoted[1]='<b class="quote">>' . $text_quoted[1];
                  } else {$text_quoted[1]="<b>" . $text_quoted[1];}
                  $message = $text_quoted[0] . $text_quoted[1];
                  if(empty(explode("(/quote)", $message)) == false){
                  $textquoted = explode("(/quote)", $message);
                  $message = $textquoted[0] . '</b>  ' . $textquoted[1];
                  } else {
                  $message = $message . '</b>';
                  }
              }
                if (empty(explode("(br)", $message)) == false){
		if (substr_count($message,"(br)") > 1){header('Location: /anonchat.php');}else{
                $textquoted = explode("(br)", $message);
                $message = $textquoted[0] . '<br>    ' . $textquoted[1];
                }
		}
                $text_to_write = $name . ": " . $message;
                fwrite($data_file, $text_to_write);
                echo "\n" . $message;	
fwrite($data_file, $text_to_write);
fclose($data_file);
header('Location: dm_finder.php');
?>
