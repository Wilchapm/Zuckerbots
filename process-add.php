<html>
<?php

include_once ("connect.php");
$name = $_GET["name"];
$id = $_GET["id"];
$qty= $_GET["qty"];

$sql="INSERT INTO item values ('$id','$name','$qty')";
#echo $sql;
$conn->query($sql);
?>
</html>
