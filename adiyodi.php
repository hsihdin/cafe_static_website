<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Caf&eacute;!</title>
	<link rel="stylesheet" href="css/styles.css">
</head>

<body class="bodyStyle">

	<div id="header" class="mainHeader">
		<hr>
		<div class="center"> Adiyodi's Caf&eacute;</div>
	</div>
	<br>
	<hr>
	<div class="topnav">
		<a href="index.html">Home</a>
		<a href="#aboutUs">About Us</a>
		<a href="#contactUs">Contact Us</a>
	</div>
	<hr>
	<div id="mainContent">

		<div id="mainPictures" class="center">
			<table>
				<tr>
					<td><img src="images/Coffee-and-Pastries.jpg" height=auto width="490"></td>
					<td><img src="images/Cake-Vitrine.jpg" height=auto width="450"></td>
				</tr>
			</table>
			<hr>
			<div id="header" class="mainHeader"><p>Adiyodi caf&eacute; Employee List!</p></div>
			<br>
			<?php
		$connection_string = "host=adiyodi-assignment1-db-instance-1.c76pc1jpullp.us-east-1.rds.amazonaws.com port=5432 dbname=adiyodi_db user=postgres password=postgres123";
		$connection = pg_connect($connection_string) or die("Could not connect to the database: " . pg_last_error());


		$query = "select * from public.employee;";
		$result = pg_query($connection, $query) or die("Error reading data: " . pg_last_error());

		while ($row = pg_fetch_assoc($result)) {
			echo "ID: " . $row['id'] . ", First Name: " . $row['fname'] . ", Last Name: " . $row['lname'] . ", Timestamp: " . $row['created_at'] . "\n";
		}

		?>



		</div>
	</div>
</body> 
</html>