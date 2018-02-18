<?php


require 'inc/conn.php';


//INSERT COMMANDS
	try {

		//$query = "INSERT INTO `hero` (`id`, `name`) VALUES (NULL, 'Sailormoon')";

		$query = "INSERT INTO sites (name) VALUES ('" . $_REQUEST['name'] . "')";
		$conn->exec($query);
		//echo " <br /> Values inserted into the database.";

		//$conn = null;

		header('Location: index.php');

	} catch(PDOException $e) {

		echo "Insert Failed: " . $e->getMessage();
		$conn = null;
		exit();

	}



	?>
