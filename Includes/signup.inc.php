<?php

if(isset($_POST["submit"])) {
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $pwdrepeat = $_POST["repeatpwd"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";


    if(emptyInputSignup ($username, $email, $password, $pwdrepeat) !== false) {
        header("location: ../Main/SignUp.php?error=emptyInput");
        exit(); 
    }
      
    if(invalidUsername($username) !== false) {
        header("location: ../Main/SignUp.php?error=invalidusername");
        exit(); 
    }

    if(invalidEmail($email) !== false) {
        header("location: ../Main/SignUp.php?error=invalidemail");
        exit(); 
    }

    if(pwdMatch($password, $pwdrepeat) !== false) {
        header("location: ../Main/SignUp.php?error=passworddontmatch");
        exit(); 
    }

    if(usernameExist($conn, $username, $email) !== false) {
        header("location: ../Main/SignUp.php?error=usernametaken");
        exit(); 
    }

    createUser($conn, $username, $email, $password); 

}
else {
    header("location: ../Main/SignUp.php");
    exit();
}