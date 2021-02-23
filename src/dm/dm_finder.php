<?php
session_start();
if (isset($_POST['DMnum'])) {
	$_SESSION['DMnum'] = $_POST['DMnum'];
}
if (!isset($_SESSION['DMnum'])) {
	$_SESSION['DMnum'] = $_COOKIE['user'];
}
?>
<link type="text/css" rel="stylesheet" href="/Stylesheet.css">
<body onload="Autoscroll();">
	<iframe id="GFG" src = '/src/dm/<?php echo $_SESSION['DMnum'];?>.txt' width = "50%" height = "50%"style="border: 0px">
		Sorry your browser does not support inline frames. Use GNU IceCat.
    </iframe>
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
		}
	</script>
</body>
