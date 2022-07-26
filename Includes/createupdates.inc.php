<?php
include "dbh.inc.php";
if(isset($_POST["insert"])){
    $id = $_POST["user_id"];
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $desc = $_POST["description"];
    $pnumber = $_POST["phone"];
    $Haddress = $_POST["address"];
    $github = $_POST["github"];
    $twitter = $_POST["twitter"];
    $facebook = $_POST["facebook"];

    $sql = "INSERT INTO userdata (`first_name`, `last_name`, `description`, `phone_num`, `address`, `git_account`, `facebook_account`, `twitter_account` ) VALUES ($firstname, $lastname, $desc, $pnumber, $Haddress, $github, $twitter, $facebook);";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssss", $firstname, $lastname, $desc, $pnumber, $Haddress, $github, $twitter, $facebook);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Main/profilepage.php?error=none");
    exit();
    
}

?>