<?php
session_start();
$cookie_name="user";
$cookie_value=rand(0,32767);
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<a href="/src/dm/dm_generator.php">generate a dm</a>
<form method="POST" action="/src/dm/dm_finder.php">
        <input name="DMnum" placeholder="32767" type="text">
	<button type="submit" value="submit">Send</button>
</form>

