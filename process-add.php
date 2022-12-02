<html>
<?php
//CPSC336 Database Connectivity Demo for PHP
//Professor Kreider
//based one example from https://www.w3schools.com/Php/php_mysql_connect.asp

$servername = "devdb336.cavbi7rdxs4h.us-east-1.rds.amazonaws.com";
$username   = "admin";
$password   = "password";
$dbname     = "inventory";
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed: ". $conn->connect_error);
}
//echo "connected successfully <br>";
#include_once ("db_connect.php");
$name = $_GET["name"];
$id = $_GET["id"];
$qty= $_GET["qty"];

$sql="INSERT INTO item values ('$id','$name','$qty')";
#echo $sql;
$conn->query($sql);
?>
</html>
