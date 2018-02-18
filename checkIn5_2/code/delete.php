<?php

require 'inc/conn.php';

//DELETE INFORMATION COMMAND

try {
	$query = "DELETE FROM hero WHERE id = " .$_REQUEST['id'];
	//echo $query;

	$conn->exec($query);
	//echo "Data Deleted";
	header('Location: index.php');

} catch(PDOException $e) {
	echo "Delete Failed: " . $e->getMessage();
	exit();
}

?>
