<?php
echo "-1";
extract($_REQUEST);
if(isset($_POST["submit"])){
	echo "0";
	require_once "BTfunctions.php";
	require_once "databasestuff.php";
	echo "1"; 

	if(emptyI($email, $username, $password, $Rpassword) !== false){ // just for forced post injection
		header("location: PAMRver10.php?error=emptyinput");
		exit();
	}
	echo "2";
	if(badUN($username) !== false){
		header("location: PAMRver10.php?error=badusername");
		exit();
	}
	echo "3";
	if(badEmail($con, $email) !== false){
		header("location: PAMRver10.php?error=bademail");
		exit();
	}
	echo "4";
	if(pwdcheck($password, $Rpassword) !== false){
		header("location: PAMRver10.php?error=NMpwd");
		exit();
	}
	echo "5";
	if(taken($con, $email, $username)){
		header("location: PAMRver10.php?error=godfuckme");
		exit();
	}
	echo "6";
	register($con, $email, $username, $password);
	echo "7";

	







} else {
	header("location: PAMRver10.php");
	exit();
}