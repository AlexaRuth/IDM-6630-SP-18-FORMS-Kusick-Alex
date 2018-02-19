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