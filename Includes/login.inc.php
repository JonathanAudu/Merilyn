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

    
        $sql = "SELECT * FROM userdata WHERE `password` = ? AND `username` = ?;";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $sql);
    
        mysqli_stmt_bind_param($stmt, "s", $password, $username);
        mysqli_stmt_execute($stmt);
    
        $resultData = mysqli_stmt_get_result($stmt);

       if(mysqli_fetch_assoc($resultData)){
            $id = $resultData['user_id'];
            $role = $resultData['user_role'];
            loginUser($id, $role);
       } else {
        header("location: ../Main/Login.php?error=wrongpassword");
        exit();
       }
    
    
    }

    

