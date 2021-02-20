<?php
session_start();
$DMnum = $_SESSION['DMnum']
?>
	<iframe id="GFG" src = '/src/dm/<?php echo $DMnum;?>.txt' width = "50%" height = "50%"style="border: 0px">
		Sorry your browser does not support inline frames. Use GNU IceCat.
    </iframe>
	<form method="POST" action="/src/dm/submitDM.php">
        <input name="message" placeholder="Isn't avian so pog?!" type="text">
        <button type="submit" value="submit">Send</button>
    </form>
