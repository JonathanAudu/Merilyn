<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "intern_jon_lee";

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

if(!$conn) {
    die("Failed connection" .mysqli_connect_error());
}