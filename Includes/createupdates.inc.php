<?php
include "dbh.inc.php";
if(isset($_POST["insert"])){
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $desc = $_POST["description"];
    $pnumber = $_POST["phone"];
    $Haddress = $_POST["address"];
    $github = $_POST["github"];
    $twitter = $_POST["twitter"];
    $facebook = $_POST["facebook"];

    $sql = "INSERT INTO userdata ($firstname, $lastname, $desc, $pnumber, $Haddress, $github, $twitter, $facebook)";

    if(mysqli_query($conn, $sql)){
        header("location: ../Main/profilepage.php");
    }else{
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>