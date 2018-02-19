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

			$query = "SELECT * FROM sites WHERE id = " .$_REQUEST['site_id'];
			$site_to_update = $conn->query ($query)->fetch();

			//echo $query;

		?>


	<form action="update.php" method="post">

		<input type="text" name="site_name" value="<?php echo $site_to_update['site_name']; ?>">
		<input type="text" name="site_url" value="<?php echo $site_to_update['site_url']; ?>">
		<input type="hidden" name="site_id" value="<?php echo $site_to_update['id']; ?>">
		<input type="submit" value="Update Site">
	</form>



	<?php
	
		require 'list.php';
	?>



</body>
</html>
