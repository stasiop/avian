<html>
        <head></head>
        <title>AnonChat</title>
        <body onload="Autoscroll();">
                <div>
                        <?php
                        if ($_COOKIE['style']=="WaB"){echo '<link type="text/css" rel="stylesheet" href="/css/StylesheetPresetBlueAndWhite.css">';}
			if ($_COOKIE['style']=="PaP"){echo '<link type="text/css" rel="stylesheet" href="/css/StylesheetPresetPinkAndPink.css">';}
			else { echo '<link type="text/css" rel="stylesheet" href="/css/Stylesheet.css">';}
                        ?>
                        
                        
                        <div class="textContainer">	
                                <script type="text/javascript">   
                                function getCookie(cname) {
                                                var name = cname + "=";
                                                var decodedCookie = decodeURIComponent(document.cookie);
                                                var ca = decodedCookie.split(';');
                                                for(var i = 0; i <ca.length; i++) {
                                                var c = ca[i];
                                                while (c.charAt(0) == ' ') {
                                                c = c.substring(1);
                                                }
                                                if (c.indexOf(name) == 0) {
                                                        
                                                return c.substring(name.length, c.length);
                                                }
                                                }
                                                return "";
                                        }     
                                        window.qwer=true;
                                        window.firstFrameOfWindow=true;
                                        window.secondFrameOfWindow=true;
                                        if(window.qwer){
                                                var serverID=0;
                                                var clientId=0;

                                                var x=true;
                                                window.qwer=false;
                                        }
                                        
                                        window.firstFrameOfWindow=true;
                                        function loadDoc() {
                                                console.log("Loaded Document")
                                                var xhttp = new XMLHttpRequest();
                                                xhttp.onreadystatechange = function() {
                                                if (this.readyState == 4 && this.status == 200) {
                                                        serverID = this.responseText;
                                                }
                                                };
                                                        xhttp.open("GET", "/src/messageHandler/WouldntItBeNiceToDie.txt", true);
                                                        xhttp.send();
                                                }
                                        const task = async () => {
                                                
                                                while(x) {
                                                        
                                                        
                                                        
                                                        //fuck i hate my fucking life
                                                        await new Promise(r => setTimeout(r, 1000));
                                                        
                                                        
                                                        loadDoc();
                                                        
                                                        console.log("serverID "+serverID)
                                                        console.log("clientID "+clientId)
                                                        if(!window.firstFrameOfWindow){
                                                                if(!window.zvcx){
                                                                        if(serverID!=clientId){
                                                                        console.log("DifferentIDS");
                                                                        var iframe = document.getElementById('GFG');
                                                                        iframe.src = iframe.src;
									Autoscroll();
									if((document.hidden)==true){
									var audio = new Audio('/src/misc/msgnotif.mp3');
									audio.play();
									}
                                                                        clientId=serverID;
                                                                        }
                                                                }else{
                                                                        window.secondFrameOfWindow=false;
                                                                        var iframeCW = document.getElementById('GFG');
                                                                        if(iframeCW!=null){
                                                                                if (iframeCW.document){
                                                                                iframeCW = iframeCW.document;
                                                                        }
                                                        }
                                                                }
                                                                
                                                        
                                                        }else{
                                                                window.firstFrameOfWindow=false;
                                                        }
                                                        
                                                        
                                                        
                                                        
                                                        
                                                };
                                        }
                                        task()
                                        
                                </script>                         
                                      <iframe id="GFG" src = "/src/messageHandler/message.php" width = "100%" height = "100%"style="border : 0px; color:white">
                                        Sorry your browser does not support inline frames. Use GNU IceCat.
                                      </iframe>
                        </div>
                            <script>
                                function Autoscroll() { // this is good
                                var input = document.getElementById ("message");
                                input.focus ();
                                var iframeID = document.getElementById("GFG");

                                var iframeCW = (iframeID.contentWindow || iframeID.contentDocument);
                                document.getElementById('GFG').onload = function(){ setTimeout("document.getElementById('GFG').contentWindow.scrollTo(0, 99999999)", 1) }
                                if (iframeCW.document) iframeCW = iframeCW.document;
                                document.getElementById("GFG").src = "/src/messageHandler/message.php"; // WHAT THE FUCK IS THIS SHIT IF THIS FIXED I WILL TEAR MY BALLS OFF, FUCK YOU FIREFOX
                                }
                           </script>
                           <script>
                                Autoscroll();
                            </script>
                        <form id="msgform" method="POST" action="src/messageHandler/submit.php">

                                <input name="message" placeholder="Isn't avian so pog?!" id="message" type="text">
                                <button type="submit" value="submit">Send</button>
                        </form>
                        <script type="text/javascript">document.msgform.message.focus();</script> <!-- to focus on the input box, for easier typing -->
			<a href="/src/misc/formatHelp.html">Formatting Help</a>
                        <form action="/src/messageHandler/upload.php" method="post" enctype="multipart/form-data">
							  Select image to upload:
							  <input type="file" name="fileToUpload" id="fileToUpload">
							  <input type="submit" value="Upload Image" name="submit">
						</form>
                </div>
        </body>

</html>






