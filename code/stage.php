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
		<nav><?php include "inc/nav.php" ?></nav>
	</header>


		<?php

			require 'inc/conn.php';

			$query = "DELETE FROM sites WHERE id = " .$_REQUEST['id'];
			$hero_to_update = $conn->query ($query)->fetch('name');
			//echo $hero_to_update['id'];
			//echo $query;


		?>


	<form action="update.php" method="post">
		<input type="text" name="name" value="<?php $site_to_update['name'];?>">
		<input type="submit" value="Add Site">
	</form>



	<?php

		$query = "SELECT * FROM sites ORDER BY id DESC";
		//$query = "SELECT * FROM hero WHERE name = 'Sailormoon' "; //to find a specific piece of information

		foreach ($conn->query($query) as $site) {
			//echo $hero['id'] . ", " . $hero['name']; //do not show ID

			echo "<ul>";

				echo "<li>" . $site['id'] . "</li>";
				echo "<li>" . $site['name'] . "</li>";

				echo "<li>
				<form action='stage.php' method='post'>
					<input type='text' name='name' value='". $site['id'] . "'/>
					<input type='submit' value='Edit'></submit>
				</form>
				</li>";

				echo "<li>
				<form action='delete.php' method='post'>
					<input type='text' name='name' value='". $site['id'] . "'/>
					<input type='submit' value='Delete'></submit>
				</form>
				</li>";



			echo "</ul>";
		}

		//} catch(PDOException $e) {
		//	echo "Select Failed: " . $e->getMessage();
		//	exit();
		//}

	?>

</body>
</html>
