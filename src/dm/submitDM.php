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
                $text_to_write = "<br>" . $name . ":";
                $snedited = 0;
                function formatCheck($name, $message){ //check for specific characters and strings
                        $edited = 0;
                        if(strlen($message)<250){
                                if(strpos($message, "<") !== false){
                                        echo "<h1>Dissallowed character</h1><br><hr><p>The character "<" is illegal due to exploits, for alternatives look at<br>our formatting help, thank you</p>";
                                } else {
                                if(strpos($message, "(quote)") !== false){
                                        $text_quoted=explode("(quote)", $message);
                                        if(isset($text_quoted[1])){
                                                $text_quoted[1]='<b class="quote">>' . $text_quoted[1];
                                        } else {$text_quoted[1]="<b>" . $text_quoted[1];}
                                        $message = $text_quoted[0] . $text_quoted[1];
                                        if(strpos($message, "(/quote)") !== false){
                                                $textquoted = explode("(/quote)", $message);
                                                $message = $textquoted[0] . '</b>  ' . $textquoted[1];
                                        } else {
                                                $message = $message . '</b>';
                                        }
                                        $total = "<br>" . $name . ": " . $message;
                                        $text_to_write = $total;
                                }
                                if (strpos($message, "(br)") !== false){
                                        if (substr_count($message,"(br)") > 1){header('Location: dm_finder.php');}else{
                                                $textquoted = explode("(br)", $message);
                                                $message = $textquoted[0] . '<br>' . $textquoted[1];
                                                $total = "<br>" . $name . ": " . $message;
                                                $text_to_write = $total;
                                        }
                                }
                                if ($edited==1){} else {
                                        $text_to_write = "<br>" . $name . ": " . $message;
                                }
                                }
                        }
                        return $text_to_write;
                }
                function imageUpload($filename, $filetmpname, $postfile, $text_to_write1){
                        $target_dir = "../messageHandler/uploads/";
                        $renamefileto = rand(0,2738912);
                        if (file_exists("../messageHandler/uploads/" . $renamefileto)){$renamefileto = rand(0,2738912);}
                        $target_file = $target_dir . $renamefileto;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        // Check if image file is a actual image or fake image
                                $check = getimagesize($filetmpname);
                                if($check !== false) {
                                        echo "File is an image - " . $check["mime"] . ".";
                                        $uploadOk = 1;
                                        $uploadType = 1;
                                } elseif (preg_match('/^.*\.(mp4|mov|mpg|mpeg|wmv|mkv|webm)$/i', $filename)){
                                        $uploadType = 2;
                                        echo "File is an video";
                                        $uploadOk = 1;
                                } else {
                                        echo "File is not an image.";
                                        $uploadOk = 0; // stan why is this not a bool
                                        $uploadType = 0;
                                }
                        if ($uploadOk == 0) {
                                echo "Sorry, your file was not uploaded.";
                        // if everything is ok, try to upload file
                        } else {
                                if (move_uploaded_file($filetmpname, $target_file)) {
                                        echo "The file ". htmlspecialchars( basename($filename)). " has been uploaded.";
                                        if ($uploadType == 1){
                                                $text_to_write1 = $text_to_write1 . '<br> <img src="/src/messageHandler/uploads/' . $renamefileto . '">';
                                        } elseif ($uploadType == 2){
                                                $text_to_write1 = $text_to_write1 . '<br> <video width="320" height="240" controls><source src="/src/messageHandler/uploads/' . $renamefileto . '" type="' . mime_content_type('../messageHandler/uploads/' . $renamefileto) . '">Your browser does not support the video tag.</video>';

                                        }
                                } else {
                                        echo "There was an error uploading your file";
                                }
                        }
                        return $text_to_write1;
                        }
                if (empty($_POST['message']) == false){echo "big chungus"; $snedited = 1; $text_to_write = formatCheck($name, $message);}
                if (empty($_FILES['fileToUpload']['tmp_name']) == false){$snedited = 1; echo "big blungus"; $text_to_write = imageUpload($_FILES["fileToUpload"]["name"], $_FILES["fileToUpload"]["tmp_name"], $_POST["fileToUpload"], $text_to_write);}
                if ($snedited == 0){$text_to_write = ''; header('Location: dm_finder.php');}
                fwrite($data_file, $text_to_write);
                echo "<br>Your message was: " . $message . "<br>";
                echo "Your text written was: " . $text_to_write . "<br>";
                fclose($idFileRead);
                echo "The ID for this message is: " . (string) $idInt . "<br>";
                $idFile=fopen("WouldntItBeNiceToDie.txt","w+");
                fwrite($idFile,(string)$idInt);
                fclose($idFile);
                fclose($data_file);
                header('Location: dm_finder.php');
?>
