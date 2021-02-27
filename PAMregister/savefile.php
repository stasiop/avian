<?php
    extract($_REQUEST);
	echo 
	$path = "names/" . $email . ".txt";
	$MAT = fopen($path, "w+");
	$ids = fread($MAT, "10000");
	
	
	$x = 0;
	$times = 1;
	while ($x == 0) { 
		$rande = rand(1, 9999);
			if(strpos($ids,$email) === false) {
				if(strpos($ids,$rande) === false) {
					$dusername = $username . "#" . sprintf('%04u', $rande);
					$fusername = trim($dusername);
					fwrite($MAT, $email . "\n ");
					fwrite($MAT, $fusername . "\n");
					fwrite($MAT, $password . "\n" . "\n");                     
					$x++;				
					header("location: /PAMver10.php");
				
				} else {
			
					$times++;
					if($times >= 9999) {
						echo "<p> name is taken </p>";
					}	
				}
			} else {
				echo "<a href=PAMRver10.php> email already in use click here to retry </a>";
			} 
	} ?>