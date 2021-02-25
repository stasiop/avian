<?php
    extract($_REQUEST);
	$path = "names/" . $username . ".txt";
	$MAT = fopen($path, "w+");
	$ids = fread($MAT, "10000");
	
	$x = 0;
	$times = 1;
	while ($x == 0) { 
		$rande = rand(1, 9999);
			if(strpos($ids,$rande) === false) {
				$fusername = $username . "#" . sprintf('%04u', $rande);
				fwrite($MAT, $fusername . "\n");
				fwrite($MAT, $password . "\n" . "\n");
				$x++;				
				header("location: /src/PAM/PAMver10.php");
				
			} else {
			
				$times++;
				if($times >= 9999) {
					echo "<p> name is taken </p>";
					$x++;
				}	
			}
		}
	}
?>		
