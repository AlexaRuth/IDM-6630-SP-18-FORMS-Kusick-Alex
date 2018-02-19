<?php

require 'inc/conn.php';


//INSERT COMMANDS
try {

	$query = "INSERT INTO sites (site_url, site_name) VALUES ('" . $_REQUEST['site_url'] . "', '" . $_REQUEST['site_name'] . "')";
	$conn->exec($query);

	header('Location: index.php');

} catch(PDOException $e) {

	echo "Insert Failed: " . $e->getMessage();
	$conn = null;
	exit();

}

?>
