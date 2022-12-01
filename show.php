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
# $sql = "SELECT id, name, qty FROM item WHERE id= '".$_GET["id"]."'";
$sql = "SELECT id, name, qty FROM item";
$result = $conn->query($sql);
if($result->num_rows > 0){
	while($row=$result->fetch_assoc()){
		echo "ID: ".$row["id"]."  Name  ".$row["name"]."  QTY  ".$row["qty"];
	echo "<br><br>";	
	}
}else{
	echo "no username or login was bad<br>";
}

?>
</html>
