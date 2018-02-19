<?php

require 'inc/conn.php';


//INSERT COMMANDS
try {

	$query = "INSERT INTO sites (site_url, site_name) VALUES (:site_url, :site_name)";
	//$query = "INSERT INTO sites (site_url, site_name) VALUES ('" . $_REQUEST['site_url'] . "', '" . $_REQUEST['site_name'] . "')";


	$statement = $conn->prepare($query);
	$statement->bindParam( ':site_url', $_REQUEST['site_url']);
	$statement->bindParam( ':site_name', $_REQUEST['site_name']);
	$statement->execute();

	//$conn->exec($query);

	header('Location: index.php');

} catch(PDOException $e) {

	echo "Insert Failed: " . $e->getMessage();
	$conn = null;
	exit();

}

?>
