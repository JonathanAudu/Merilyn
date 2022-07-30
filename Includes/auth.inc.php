<?php

// functions for user Signup
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
    $sql = "SELECT * FROM userdata WHERE username = ? OR user_email = ?;";
    $stmt = mysqli_stmt_init($conn);
    // if(mysqli_stmt_prepare($stmt, $sql)) {
    //     header("location: ../Main/SignUp.php?error=usernameoremailalreadyexist");
    //     exit(); 
    // }
    mysqli_stmt_prepare($stmt, $sql);

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if(mysqli_fetch_assoc($resultData)) {
        header("location: ../Main/SignUp.php?error=usernameoremailalreadyexist");
        exit();
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}


function createUser($conn, $username, $email, $password)  {
    $sql = "INSERT INTO userdata (`username`, `user_email`, `password` ) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    // if(mysqli_stmt_prepare($stmt, $sql)) {
    //     header("location: ../Main/SignUp.php?error=stmtfailed");
    //     exit(); 
    // }
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Main/SignUp.php?error=none");
    exit(); 
}


// Functions for user Login

function emptyInputlogin ($username, $password) {
    if (empty($username) || empty($password) ) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;
}

function checkUsername($conn,$username) {
    $sql = "SELECT * FROM userdata WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if (mysqli_fetch_assoc($resultData)) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;
    }

function checkPassword($conn,$password) {
    $sql = "SELECT * FROM userdata WHERE `password` = ?;";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);

    mysqli_stmt_bind_param($stmt, "s", $password);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    
    if (mysqli_fetch_assoc($resultData)) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $id, $username, $password) {
    session_start();
    // add session data for id
    $_SESSION["user_id"] = $id;
    $_SESSION['username'] = $username;    
    $_SESSION["password"] = $password;  
    header("location: ../Main/index.php");
    exit();  

}




