<?php
    extract($_REQUEST);

	
	
	$Susername = substr($username, 0, -5);
	$path = "PAMregister/names/" .  $Susername . ".txt";
	$search      = $username;
	$lines       = file($path);
	$line_number = false;
	if (file_exists($path)){
		while (list($key, $line) = each($lines) and !$line_number) {
			$line_number = (strpos($line, $search) !== FALSE) ? $key + 1 : $line_number;
		}
		$hopefullyp = $lines[$line_number];
		$hopefullyp = trim($hopefullyp);
		if ($password == $hopefullyp){
			$Eusername = base64_encode($username);
			setcookie("Username", $Eusername);
			header("location: /accountScreen.php");
		} else {
			echo "<p> incorrect password please retry or register an account </p>";
		}
	}else {
		echo "<p> this username does not exist please register an account</p>";
	} ?>
