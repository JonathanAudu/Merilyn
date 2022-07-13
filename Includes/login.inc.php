<?php

if(isset($_POST["submit"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
   

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if(emptyInputlogin ($username, $password,) !== false) {
        header("location: ../Main/Login.php?error=emptyInput");
        exit(); 
    }

    if(wrongUsername($username) !== false) {
        header("location: ../Main/Login.php?error=wrongusername");
        exit();
    }

    if(incorrectPassword($password) !== false) {
        header("location: ../Main/Login.php?error=incorrectpassword");
        exit();
    }

    loginUser($conn, $username, $password,);

}else {
    header("location: ../Main/Login.php");
    exit();
}
