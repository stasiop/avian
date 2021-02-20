<?php
if(!isset($_COOKIE["user"])) {
	$cookie_name = "user";
	$cookie_value = rand(0, 32677);
	setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/"); // 86400 = 1 day
}
?>
<table width="10%" border="1" class="table">
    <tr>
        <td><a href="/anonchat.php">anonchat</a></td>
		<td><a href="/src/dm/dm_generator.php">Private DM w/ stan</a></td>
    </tr>
</table>
<form method="POST" action="/src/dm/dm_finder.php">
	<input name="DMnum" placeholder="12345" type="text">
	<button type="submit" value="submit">go to dm</button>
</form>
