<?php
session_start();
include "dbh.inc.php";
if(isset($_SESSION["username"]));
$username = $_SESSION['username'];
if(isset($_POST["update"]) ){
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $desc = $_POST["description"];
    $pnumber = $_POST["phone"];
    $Haddress = $_POST["address"];
    $github = $_POST["github"];
    $twitter = $_POST["twitter"];
    $facebook = $_POST["facebook"];
   
    $img_name = $_FILES["image"]["name"];
    $img_tmp = $_FILES["image"]["tmp_name"];
    $folder ="../upload/";
    move_uploaded_file($img_tmp, $folder.$img_name);
    
   
   
   
   
    $stmt = "UPDATE userdata SET first_name= '$firstname', last_name ='$lastname', description ='$desc', phone_num ='$pnumber', address ='$Haddress', git_account ='$github', facebook_account ='$facebook', twitter_account ='$twitter', images = '$new_image_name' WHERE username = '$username' ";
    $result = mysqli_query($conn, $stmt);
   
    if($result){
      header("Location: ../Main/profilepage.php");
      exit();
    }else {
      echo "Unsuccessful";
    }
    
  }

?>