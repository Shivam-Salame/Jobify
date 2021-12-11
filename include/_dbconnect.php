<?php
//script to connect to database

$servername="localhost";
$username  ="root";
$password  ="";
$database  ="jobify";

$conn = mysqli_connect($servername, $username,
 $password, $database);
?>