<?php
session_start();
include "dbh.inc.php";
if(isset($_SESSION["username"]));
$username = $_SESSION['username'];
if(isset($_POST["submit"])){
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $desc = $_POST["description"];
    $pnumber = $_POST["phone"];
    $Haddress = $_POST["address"];
    $github = $_POST["github"];
    $twitter = $_POST["twitter"];
    $facebook = $_POST["facebook"];
    

    $sql = "INSERT INTO userdata (`first_name`, `last_name`, `description`, `phone_num`, `address`, `git_account`, `facebook_account`, `twitter_account` ) VALUES ($firstname, $lastname, $desc, $pnumber, $Haddress, $github, $facebook, $twitter) WHERE `username` = '$username'";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../Main/profilepage.php");
        exit();
      } else {
        echo "Error: " . mysqli_error($conn);
      }
      
      mysqli_close($conn);
}

?>