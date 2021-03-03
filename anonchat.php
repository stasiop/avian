<html>
        <head></head>
        <title>AnonChat</title>
        <body onload="Autoscroll();">
                <div>
                        <link type="text/css" rel="stylesheet" href="Stylesheet.css">
                        <img class="direction" src="/src/images/anon chat neon.png" width="320" height="200">
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
                                        window.asdf=true;
                                        window.zxcv=true;
                                        if(window.qwer){
                                                var serverID=0;
                                                var clientId=0;

                                                var x=true;
                                                window.qwer=false;
                                        }
                                        
                                        window.asdf=true;
                                        function loadDoc() {
                                                console.log("Loaded Document")
                                                var xhttp = new XMLHttpRequest();
                                                xhttp.onreadystatechange = function() {
                                                if (this.readyState == 4 && this.status == 200) {
                                                        serverID = this.responseText;
                                                        //console.log(serverID)
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
                                                        
                                                        /*window.ghjk=false;
                                                        if(window.asdf){
                                                                window.asdf=false;
                                                        }
                                                        if(!window.asdf){
                                                        if(clientId!=serverID){
                                                                clientId=serverID;
                                                                document.cookie="clientID="+clientId;
                                                                var iframe = document.getElementById('GFG');
                                                                iframe.src = iframe.src;
                                                                console.log("differentIDs")
                                                        }else{
                                                                
                                                                console.log("Same ID's Dumbass");
                                                        }
                                                        
                                                        
                                                        if(getCookie("clientID")!=null){
                                                        clientId=getCookie("clientID");

                                                        }*/
                                                        if(!window.asdf){
                                                                if(!window.zvcx){
                                                                        if(serverID!=clientId){
                                                                        console.log("DifferentIDS");
                                                                        var iframe = document.getElementById('GFG');
                                                                        iframe.src = iframe.src;
                                                                        clientId=serverID;
                                                                        }
                                                                }else{
                                                                        window.zxcv=false;
                                                                }
                                                                
                                                        
                                                        }else{
                                                                window.asdf=false;
                                                        }
                                                        
                                                        
                                                        console.log("serverID "+serverID)
                                                        console.log("clientID "+clientId)
                                                        
                                                        
                                                };
                                        }
                                        task()
                                        
                                </script>                         
                                      <iframe id="GFG" src = "/src/messageHandler/message.html" width = "100%" height = "100%"style="border: 0px">
                                        Sorry your browser does not support inline frames. Use GNU IceCat.
                                      </iframe>
                        </div>
                            <script>
                                function Autoscroll() { // this is good
                                var iframeID = document.getElementById("GFG");

                                var iframeCW = (iframeID.contentWindow || iframeID.contentDocument);
                                document.getElementById('GFG').onload = function(){ setTimeout("document.getElementById('GFG').contentWindow.scrollTo(0, 99999999)", 1) }
                                if (iframeCW.document) iframeCW = iframeCW.document;
                                iframeCW.body.style.color = "white";
                                }
                           </script>
                           <script>
                                Autoscroll();
                            </script>
                        <form method="POST" action="src/messageHandler/submit.php">

                                <input name="message" placeholder="Isn't avian so pog?!" type="text">
                                <button type="submit" value="submit">Send</button>
                        </form>
                        <form action="/src/messageHandler/upload.php" method="post" enctype="multipart/form-data">
							  Select image to upload:
							  <input type="file" name="fileToUpload" id="fileToUpload">
							  <input type="submit" value="Upload Image" name="submit">
						</form>
                </div>
        </body>

</html>






