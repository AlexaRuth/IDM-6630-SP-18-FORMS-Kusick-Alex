<?php

require 'inc/conn.php';

//UPDATE COMMANDS

try {


$query = "UPDATE sites SET site_url= '" . $_REQUEST['site_url'] . "', site_name= '" . $_REQUEST['site_name'] . "' WHERE id= " . $_REQUEST['site_id'];

	//print_r($_REQUEST);
	//echo $query;

	$conn->exec($query);

	header('Location: index.php');


} catch(PDOException $e) {
	echo "Update Failed: " . $e->getMessage();
	$conn = null;
	exit();
}


?>
