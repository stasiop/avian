<?php
function emptyIL($email, $password){
    $result;
    if(empty($email) || empty($password)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function taken($con, $email){
    $sql = "SELECT * FROM users WHERE Username = ? OR Email = ?;";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: PAMRver10.php?error=idiot");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $RD = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($RD)){
        return $row;
    } else {
        $result = False;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function login($con, $email, $password){
    $take = taken($con, $email);

    if($take === False){
        header("location: /PAMver10.php?error=noaccountfound");
    }

    $hashedpass = $take["Password"];
    $checkpass = password_verify($password, $hashedpass);
    
    if($checkpass === False){
        header("location: /PAMver10.php?error=noaccountfound");
        exit();
    } elseif($checkpass === True){
        session_start();
        $UVIDF16 = sprintf('%016u', $take["UniversalID"]);
        $_SESSION["UniversalID"] = $UVIDF16;
	$Username = $take["Username"];
	$Username = $_SESSION["Username"];
	$path = "PAMregister/users/$Username";
//	$upath = "PAMregister/users/$UVIDF16";
//	$path = $upath . "-" . $Username;
	if (!file_exists($path)) {
		mkdir($path, 0777);
	}
	header("location: /accountScreen.php");	
    }
}
