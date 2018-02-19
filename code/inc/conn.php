<?php

	$host = "172.21.0.2";
	$database = "week05";
	$username = "idm6630";
	$password = "idm6630";

	try {
			$conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "Connected Successfully";

			//$conn = null;

	} catch(PDOException $e) {
			echo "connection failed:". $e->getMessege();
			exit(); //stops whatever the code is doing
			}

?>
