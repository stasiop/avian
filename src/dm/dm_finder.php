<?php
session_start();
if (isset($_POST['DMnum'])) {
	$_SESSION['DMnum'] = $_POST['DMnum'];
	$dmnum = $_SESSION['DMnum'];
}
if (!isset($_SESSION['DMnum'])) {
	if (isset($_COOKIE['pamuser'])){
		$_SESSION['DMnum'] = substr(base64_decode($_COOKIE['pamuser']), 0, -6);
		$dmnum = $_SESSION['DMnum'];} 
	elseif (isset($_COOKIE['user'])){ $_SESSION['DMnum'] = $_COOKIE['user']; $dmnum = $_SESSION['DMnum'];}
}
?>
<title>DM | #<?php echo $_SESSION['DMnum'] ?></title>
<link type="text/css" rel="stylesheet" href="/css/Stylesheet.css">
<body onload="Autoscroll();">
<h2>#<?php echo $_SESSION['DMnum'] ?></h2>
<div class="textContainer">
	<iframe id="GFG" src = "/src/dm/<?php echo $_SESSION['DMnum'];?>.html" width = "60%" height = "87.5%"style="border: 0px">
		Sorry your browser does not support inline frames. Use GNU IceCat.
    </iframe>
</div>
	<form method="POST" action="/src/dm/submitDM.php">
        <input name="message" placeholder="Isn't avian so pog?!" type="text">
        <button type="submit" value="submit">Send</button>
    </form>
	<script>
		function Autoscroll() {			// this is good
		var iframeID = document.getElementById("GFG");

		var iframeCW = (iframeID.contentWindow || iframeID.contentDocument);
		document.getElementById('GFG').onload = function(){ setTimeout("document.getElementById('GFG').contentWindow.scrollTo(0, 99999999)", 1) }
		if (iframeCW.document) iframeCW = iframeCW.document;
		iframeCW.body.style.color = "white";
		var x = document.getElementById("vc");
		  if (x.style.display === "none") {
			x.style.display = "block";
		  } else {
			x.style.display = "none";
		  }
		}
		function showJitsiCall() {
		  var x = document.getElementById("vc");
		  if (x.style.display === "none") {
			x.style.display = "block";
		  } else {
			x.style.display = "none";
		  }
		}
	</script>
</body>
						<form action="/src/messageHandler/dm_upload.php" method="post" enctype="multipart/form-data">
							  Select image to upload:
							  <input type="file" name="fileToUpload" id="fileToUpload">
							  <input type="submit" value="Upload Image" name="submit">
						</form>
<button id="myButton1" onclick="showJitsiCall()">show/hide call</button>
<iframe id="vc" src="https://meet.jit.si/<?php echo $_SESSION['DMnum']; ?>" allow="camera;microphone" width="100%" height="500px">
	your pc sucks
</iframe>
