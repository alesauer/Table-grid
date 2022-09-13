<?php
include("../../libs/classes.php");

$obj = new Database;
$result = $obj->connect("select * from users");

$rows = array();
while($r = mysqli_fetch_array($result)) {
  $rows[] = $r;
}

echo json_encode($rows);
?>