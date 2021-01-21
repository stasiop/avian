<html>
        <head></head>
        <?php 
                function onLoadIn(){
                        
     
                        $myfile = fopen("src/messageHandler/message.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,10000000);
                        fclose($myfile);
        
                }
                
                
        ?>
        <body>
                <div>
                        <link type="text/css" rel="stylesheet" href="Stylesheet.css">
                        <div id="textContainer">
                                <?php 
                                        onLoadIn();
                                ?>
                        </div>
                        <form method="POST" action="src/messageHandler/submit.php">
                                <input name="message" placeholder="Isn't avian so pog?!" type="text">
                                <button type="submit" value="submit">Send</button>
                        </form>
                </div>
        </body>
        
</html>


