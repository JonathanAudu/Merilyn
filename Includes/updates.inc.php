<?php
include_once "dbh.inc.php";
if(isset($_POST["update"])) {
    $id = $_POST["user_id"];
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $desc = $_POST["description"];
    $pnumber = $_POST["phone"];
    $Haddress = $_POST["address"];
    $Github = $_POST["github"];
    $twitter = $_POST["twitter"];
    $facebook = $_POST["facebook"];


    $stmt = "UPDATE userprofile SET 'first_name = '$firstname', last_name = '$lastname', `description` = '$' "
}