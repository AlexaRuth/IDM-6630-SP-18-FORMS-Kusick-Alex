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

		$query = "SELECT * FROM sites ORDER BY id DESC";

		foreach ($conn->query($query) as $site) {

			echo "<ul>";

				echo "<li>" . $site['site_name'] . "</li>";
				echo "<li>" . $site['site_url'] . "</li>";
				//echo "<li>" . $site['id'] . "</li>";
				echo "<li>

				<form action='delete.php' method='post'>
					<input type='hidden' name='site_id' value='". $site['id'] . "'/>
					<input type='submit' value='Delete'></submit>
				</form>

				</li>";

				echo "<li>
				<form action='stage.php' method='post'>
					<input type='hidden' name='site_id' value='". $site['id'] . "'/>
					<input type='submit' value='Edit'></submit>
				</form>
				</li>";

			echo "</ul>";
		}

	?>


</body>
</html>
