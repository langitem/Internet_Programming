<!DOCTYPE html>
<html>
	<head>
		<title> List of all the mobile devices </title>
		<meta charset="utf-8" />
		<link href="allDevices.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<p>
		<h2>List of Mobile Devices in the Database</h2>
		</p>
		<?php
			// $dsn = 'mysql:host=laureatestudentserver.com;dbname=laureate_mobiles';
			/* The data source name consists of the name of the server hosting MySQL plus the name of the database */
			// $username = 'laureate_xxxx';
			// $password = 'yyyyy';
			/* A database, username and password will be allocated to each project group */
			// $dbc = new PDO($dsn, $username, $password);
			/* Create a new database connection with the data source name, username and password */
			/* PDO = PHP Database Objects. We are creating a new instance of the connection object */
			include("../../../connection.php");
			$query = 'SELECT * FROM devices ORDER BY refNo';
			/* The SQL. This is the command that will extract data from the database */
			/* It says "Select everything (*) from the table called devices and place it in (ascending) reference number order" */
			$results = $dbc->query($query);
			/* Executes the SQL query stored in the variable $query, and saves all the data returned in $results */ 
			$rows = $results->rowCount(); 
			/* Establishes how many rows of data have been extracted */  
		?>
		<table>
			<caption>Mobiles in Stock</caption>
			<thead>
				<tr>
					<th>refNo</th>
					<th>name</th>
					<th>deviceType</th>
					<th>colour</th>
					<th>stockLevel</th>
					<th>salesThisMonth</th>
					<th>customerRating</th>
				</tr>
			</thead>
			<?php 
				if ($rows == 0)
				/* If no rows of data (no records) have been found */ 
				{
					echo("<p> There are currently no records in the devices table</p>");
					echo("<p><a href='main-inc.html'>Continue</a></p>");
				}
				else {      
					foreach ($results as $devices) :
					/* $results contains every row of data (every record) */ 
					/* Each record is being temporarily stored in the variable $devices while the foreach loop works its way through every record in $results */
					?> 
					<tr>
						<td class = "left">
							<?php echo $devices['refNo']; ?>
						</td>
						<td class = "left">
							<?php echo $devices['name']; ?>
						</td>
						<td class = "left">
							<?php echo $devices['deviceType']; ?>
						</td>
						<td class = "left">
							<?php echo $devices['colour']; ?>
						</td>
						<td class = "right">
							<?php echo $devices['stockLevel']; ?>
						</td>
						<td class = "right">
							<?php echo $devices['salesThisMonth']; ?>
						</td>
						<td class = "right">
							<?php echo $devices['customerRating']; ?>
						</td>
					</tr>
					<?php endforeach;
				}
				$dbc = null;
				/* Close the database connection */
			?>
		</table>
		<?php echo("<p><a href='main-inc.html'>Continue</a></p>"); ?>
	</body>
</html>
