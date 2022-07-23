<?php

if(isset($_POST["submit"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
   

    require_once "dbh.inc.php";
    require_once "auth.inc.php";

    if(emptyInputlogin ($username, $password,) !== false) {
        header("location: ../Main/Login.php?error=emptyInput");
        exit(); 
    }

    if(checkUsername( $conn, $username) !== false) {

       if (checkPassword($conn, $password) !== false) {

            loginUser($conn, $id, $username, $password);

       } else {
        header("location: ../Main/Login.php?error=wrongpassword");
        exit();
       }
    } else {
        header("location: ../Main/Login.php?error=wrongusername");
        exit();
    }

    
    }

    

