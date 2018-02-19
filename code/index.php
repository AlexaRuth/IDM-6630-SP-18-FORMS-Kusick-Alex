<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Source+Sans+Pro:300,700" rel="stylesheet">
	<title>Week 5 Assignment</title>
  </head>

<body>

	<header>
		<?php echo "<h1>Saved For a Rainy Day</h1>";?>
	</header>


	<?php

		require 'inc/conn.php';
	?>

<div class="data">

	<form action="insert.php" method="post">
		<input type="text" name="site_name" placeholder="Name of the Site">
		<input type="text" name="site_url" placeholder="HTTPS :// URL">
		<input type="submit" value="save it">
	</form>


	<?php
		require 'list.php';
	?>

</div>

<footer> 
	<p>Alex Kusick . Site Saver App</p>
</footer>

</body>
</html>
