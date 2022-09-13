<?php

$conn = @mysqli_connect('127.0.0.1','financeiro','GxgLTr201@','temp-sauer');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}






#mysqli_select_db('temp-sauer', $conn);


?>