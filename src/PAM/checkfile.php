<?php
    extract($_REQUEST);
	function GLSF($fileName, $str) {
    $lines; = file($fileName);
    foreach ($lines as $lineNumber => $line) {
        if (strpos($line, $str) !== false) {
            return $line;
        }
    }
    return -1;
}
	
	
	
	$Susername = substr($username, 0, -5)
	$path = "names/" . $Susername . ".txt";
	if (file_exists($path)) {
		GLSF($path, $username);
		$lines = file($path);
		$hopefullyu = $lines[$line];
		$hopefullyp = $lines[$line+1];
		
		if (password == hopefullyp) {
			$Eusername = base64_encode($username);
			setcookie("Username", $Eusername);
		} else {
			echo "<p> incorrect password please retry or register an account </p>";
			
		
	} else {
		echo "<p> this username does not exist please register an account</p>";
	}
	


 ?>
