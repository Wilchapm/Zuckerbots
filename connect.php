<?php

$servername = "devdb336.cavbi7rdxs4h.us-east-1.rds.amazonaws.com";
$username   = "admin";
$password   = "password";
$dbname     = "inventory";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	die("connection failed: ". $conn->connect_error);
}
?>
