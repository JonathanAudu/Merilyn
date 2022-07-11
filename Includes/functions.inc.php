<?php

function emptyInputSignup ($username, $email, $password, $pwdrepeat) {
    if (empty($username) || empty($email) || empty($password) || empty($pwdrepeat)) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;
}

function invalidUsername($username) {
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($password, $pwdrepeat)  {
    if ($password !== $pwdrepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function usernameExist($conn, $username, $email)  {
    $sql = "SELECT * FROM users WHERE Usernames = ? OR Useremails = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Main/SignUp.php?error=usernameoremailalreadyexist");
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}


function createUser($conn, $username, $email, $password)  {
    $sql = "INSERT INTO users (`Usernames`, `Useremails`, `Password` ) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Main/SignUp.php?error=stmtfailed");
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Main/SignUp.php?error=none");
    exit(); 
}


 