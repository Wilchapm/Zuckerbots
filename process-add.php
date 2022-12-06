<html>


<?php
include 'connect.php';
include 'index.html';
$name = $_GET["name"];
$id = $_GET["id"];
$qty= $_GET["qty"];

$sql="INSERT INTO item values ('$id','$name','$qty')";
#echo $sql;
$conn->query($sql);
?>
<h1> Item Added! </h1>
</html>
