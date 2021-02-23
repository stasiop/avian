<?php
if(!isset($_COOKIE["user"])) {
	$cookie_name = "user";
	$cookie_value = rand(0, 32677);
	setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/"); // 86400 = 1 day
}
?>
<style>
body {
  background-color: #545454;
}
table {
	background-color: white;
}
p {
	margin-right: 0%;
	border: 10px;
	color: white;
}
</style>
<table border="1" class="table">
    <tr>
        <td><a href="/anonchat.php">anonchat</a></td>
		<td><a href="/src/dm/dm_generator.php">generate DM</a></td>
		<td><a href="/src/dm/dm_delete.php">delete my DM</a></td>
    </tr>
</table>
<form method="POST" action="/src/dm/dm_finder.php">
	<input name="DMnum" placeholder="12345" type="text">
	<button type="submit" value="submit">go to dm</button>
</form>
<p>
This is the home of the Direct Messaging system designed by stan, it is currently very insecure.<br>Use at your own risk.
</p>
