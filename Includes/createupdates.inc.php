<?php
session_start();
include "dbh.inc.php";
if(isset($_SESSION["username"]));
$username = $_SESSION['username'];
if(isset($_POST["update"])){
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $desc = $_POST["description"];
    $pnumber = $_POST["phone"];
    $Haddress = $_POST["address"];
    $github = $_POST["github"];
    $twitter = $_POST["twitter"];
    $facebook = $_POST["facebook"];
    
    $stmt = "UPDATE `userdata` SET `first_name`= '$firstname',`last_name`='$lastname',`description`='$desc',`phone_num`='$pnumber',`address`='$Haddress',`git_account`='$github',`facebook_account`='$facebook',`twitter_account`='$twitter' WHERE `username` = '$username' ";
    $result = mysqli_query($conn, $stmt);
    if($result){
      echo "<script type= 'text/javascript'> alert('Data Updated')</script>";
      header("location :profilepage.php");
      exit();
    }else {
      echo "<script type= 'text/javascript'> alert('Data update unsuccessful')</script>";
    }
}

?>