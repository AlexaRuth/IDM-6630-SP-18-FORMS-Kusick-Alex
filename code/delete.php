<?php

require 'inc/conn.php';

//DELETE INFORMATION COMMAND

try {
	$query = "DELETE FROM sites WHERE id = " .$_REQUEST['site_id'];
	$conn->exec($query);

	header('Location: index.php');

} catch(PDOException $e) {
	echo "Delete Failed: " . $e->getMessage();
	exit();
}

?>
