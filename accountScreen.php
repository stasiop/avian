<link rel="icon" type="image/jpg" href="/src/images/avian.jpg"/>
<?php
if(!isset($_COOKIE["user"])) {
	$cookie_name = "user";
	$cookie_value = rand(0, 32677);
	setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/"); // 86400 = 1 day
}
?>


   <link type="text/css" rel="stylesheet" href="css/Stylesheet2.css">
                        
        <a href="/anonchat.php" id="anon">Global Chat</a>

<div id="spaceHog"></div>
<form method="POST" action="/src/dm/dm_finder.php">
<div id="inputBorder">	

	
	<input name="DMnum" placeholder="12345" type="text" id="dmNameInput">
	<button type="submit" value="submit" id="dmNameSubmit">Go To DM</button>
	</div>

</form>
<div id="spaceHog"></div>
<a href="/src/dm/dm_generator.php" id="generate">Create a DM</a>
		<a href="/src/dm/dm_delete.php" id="delete">Remove a DM</a>
<p id="info">
This is the home of the Direct Messaging system designed by stan, it is currently very insecure.<br>Use at your own risk.
</p>
