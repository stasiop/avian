<?php
// poger
function emptyI($email, $username, $password, $Rpassword){
    $result;
    if(empty($email) || empty($username) || empty($password) || empty($Rpassword)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function badUN($username) {
    $result;
    $len = mb_strlen($username);
    if($len < 5){
        $result = True;
    } elseif($len > 16) {
        $result = True;
    } else {
        if(preg_match("/^[a-zA-Z0-9]*$/", $username)){
            $result = False;
        }
    }
    return $result;
}

function badEmail($con, $email){
    $result;
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = False;
    }else {
        $result = True;
    } 
    return $result;
}

function pwdcheck($password, $Rpassword){ 
    if($password == $Rpassword){
        $result = False;
    } else { 
        $result = True;
    }
    return $result;
}

function taken($con, $username, $email){
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

function register($con, $email, $username, $password){
    $sql = "INSERT INTO users (Username, Email, Password) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: PAMRver10.php?error=mysql");
        exit();
    }
    $hashpassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashpassword);
    mysqli_stmt_execute($stmt);
    header("location: /PAMver10.php");
}