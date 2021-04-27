<?php
extract($_REQUEST);
if(isset($_POST["submit"])){
	require_once "PAMregister/databasestuff.php";
	require_once "BTLfunctions.php";

	if(emptyIL($email, $password)){
		header("location: /PAMver10.php?error=emptyinput");
		exit();
	}

	login($con, $email, $password);

} else {
	header("location: /PAMver10.php?error=idiot");
	exit();
}