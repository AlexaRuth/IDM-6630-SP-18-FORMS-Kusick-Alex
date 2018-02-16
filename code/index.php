<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
				<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
				<title>Week 5 Assignment</title>
</head>
				
<body>
	
	<header>
			<?php
				echo "<h1>Favorite Superhero</h1>";
			?>
	</header>

	<?php

	$host = "172.21.0.2";
	$database = "week05";
	$username = "idm6630";
	$password = "idm6630";

	try {
			$conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo " Connected Successfully ";

			//$conn = null;

	} catch(PDOException $e) {
			echo "connection failed:". $e->getMessege();
			exit(); //stops whatever the code is doing
			}


//SELECT COMMANDS

	try {

		//$query = "SELECT * FROM hero ORDER BY id DESC" ;
		$query = "SELECT * FROM hero WHERE name = 'Sailormoon' "; //to find a specific piece of information 

		foreach ($conn->query($query) as $hero) {
			//echo $hero['id'] . ", " . $hero['name']; //do not show ID
			echo $hero['name'];
			echo "<br />";
		}

		} catch(PDOException $e) {
			echo "Select Failed: " . $e->getMessage();
			exit();
		}


	?>

	
	
</body>
</html>