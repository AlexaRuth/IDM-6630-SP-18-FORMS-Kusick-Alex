<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
				<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
				<title>Week 4 Assignment</title>
</head>
				
<body>
	
	<header>
			<?php
				echo "<h1>My Top 10 Albums</h1>";
			?>
	</header>

			<?php

								$host = "172.21.0.2";
								$database = "week04";
								$username = "idm6630";
								$password = "idm6630";

								try {
										$conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
										$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
										//echo "Connected Successfully";

								} catch(PDOException $e) {
										echo"connection failed:". $e->getMessege();
										}

								$query = "SELECT * FROM `10_Fav_Albums`" ;

								echo "<ul>";
										foreach ($conn->query($query) as $album) {
												echo "<li><h2>" . $album['title'] . "</h2></li>";
												echo "<li><h3>" . $album['artist'] . ", " . $album['year'] . "</h3></li>";
												echo "<li><img src='" . $album['cover'] . "'></li>";
												}
								echo "</ul>"
		?>

	
	
</body>
</html>
