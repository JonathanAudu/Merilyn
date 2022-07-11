<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "jonlee";

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

if(!$conn) {
    die("Failed connection" .mysqli_connect_error());
}