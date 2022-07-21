<?php
session_start();
if(isset($_POST["update"])){

     $firstname = $_POST["fname"];
     $lastname = $_POST["lname"];
     $desc = $_POST["description"];
     $pnumber = $_POST["phone"];
     $Haddress = $_POST["address"];
     $Github = $_POST["github"];
     $twitter = $_POST["twitter"];
     $facebook = $_POST["facebook"];
    //  $profileimage = $_FILES["userimage"];
} 