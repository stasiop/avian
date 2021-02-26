<?php
    extract($_REQUEST);




	$path = "PAMregister/names/" .  $email . ".txt";
	$search      = $email;
	$lines       = file($path);
	$line_number = false;
	
	if (file_exists($path)){
		while (list($key, $line) = each($lines) and !$line_number) {
			$line_number = (strpos($line, $search) !== FALSE) ? $key + 1 : $line_number;
		}
		$passwordloc = $line_number + 1;
		$hopefullyp = $lines[$passwordloc];
		$hopefullyp = trim($hopefullyp);
		$username = $lines[$line_number];
		echo "1 $hopefullyp";
		echo "2 $password";
		if ($password == $hopefullyp){
			$Eusername = base64_encode($username);
			setcookie("Username", $Eusername);
			header("location: /accountScreen.php");
		} else {
			echo "<a> incorrect password please </a> <a href=/src/PAM/PAMver10.php>retry </a> <a>or </a> <a href=PAMregister/PAMRver10.php>register </a> <a>an account </a> ";
		}
	}else {
		echo "<a href=PAMregister/PAMRver10.php> email not found please register an account </a>";
	} ?>
