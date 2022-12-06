<html>
<?php
include 'connect.php';
include 'index.html';
$name = $_GET["name"];
$id = $_GET["id"];
$qty= $_GET["qty"];

$sql="DELETE FROM item WHERE id = $id";
#echo $sql;
$conn->query($sql);
?>
</html>
