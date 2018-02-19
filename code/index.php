<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Week 5 Assignment</title>
  </head>

<body>

	<header>
		<?php echo "<h1>Saved For a Rainy Day</h1>";?>
	</header>


		<?php

			require 'inc/conn.php';
		?>



	<form action="insert.php" method="post">
		<input type="text" name="site_name" placeholder="Site Name">
		<input type="text" name="site_url" placeholder="URL">
		<input type="submit" value="Add Site">
	</form>



	<?php
	
		require 'list.php';

	?>


</body>
</html>
