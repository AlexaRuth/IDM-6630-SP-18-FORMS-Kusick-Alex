<?php

require 'inc/conn.php';

//UPDATE COMMANDS

try {
	$query = "UPDATE sites SET name = 'Facebook' WHERE id = 1" ;
	$conn->exec($query);
	//echo "Data Updated";

} catch(PDOException $e) {
	echo "Update Failed: " . $e->getMessage();
	$conn = null;
	exit();
}


?>


