<!DOCTYPE html>
<html>
	<head>
		<title> Searching for a Single Record </title>
		<meta charset="utf-8" />
		<link href="allDevices.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
	
		<p>
			<h2>Device Search Result</h2>
		</p>
		
		<?php
			$refNo = $_POST['refNo']; 
			$dsn = 'mysql:host=laureatestudentserver.com;dbname=laureate_mobiles';
			$username = 'laureate_xxxx';
			$password = 'yyyyy';
			$dbc = new PDO($dsn, $username, $password);
			
			$query = "SELECT * FROM devices WHERE refNo ='" . $refNo . "'";
			/* The SQL says "Select everything from the devices table where the reference number equals that which the user typed into the previous HTML form. As the refNo is unique, there will be at most one record */
			$results = $dbc->query($query); 
			$rows = $results->rowCount(); 
		?>  
		
		
		<?php 
			if ($rows == 0) {
			      echo("<p> There is no device with that reference number in the devices table");
			} else {
				$selectedDevice = $results->fetch();
				/* Fetch a record from the $results variable and store it in $selectedDevice. There will be a maximum of one record */      
		?>
				<table border>
				<caption>The Device You Chose </caption>
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
				<tr>
					<td class = "left">
					<?php echo $selectedDevice['refNo']; ?>
					</td>
					<td class = "left">
					<?php echo $selectedDevice['name']; ?>
					</td>
					<td class = "left">
					<?php echo $selectedDevice['deviceType']; ?>
					</td>
					<td class = "left">
					<?php echo $selectedDevice['colour']; ?>
					</td>
					<td class = "right">
					<?php echo $selectedDevice['stockLevel']; ?>
					</td>
					<td class = "right">
					<?php echo $selectedDevice['salesThisMonth']; ?>
					</td>
					<td class = "right">
					<?php echo $selectedDevice['customerRating']; ?>
					</td>
				</tr>
		<?php
			} // End of else
			$dbc = null;
		?>
		</table>
		<?php
			echo("<p><a href='main.html'>Continue</a></p>");
		?>
	</body>
</html>
