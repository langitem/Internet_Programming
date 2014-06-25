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
			/*
			$username = 'laureate_xxxx';
			$password = 'yyyyy';
			$dbc = new PDO($dsn, $username, $password);
			*/
			include("../../../connection.php");
			
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
					<caption>The Device You Have Chosen for Deletion </caption>
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
				</table>
				<br>
				
				<!-- Add buttons below for deleting the record or cancelling -->
				<form name="updateForm" action="deleteDevice2.php"method="POST">
					<input type="hidden" name="refNo" value="<?php echo($refNo); ?>">
					<input type=submit value="Delete Device">
				</form>
				
				
				
		<?php
			} // End of else
			$dbc = null;
		?>
		
		<?php
			echo("<p><a href='main-inc.html'>Cancel delete and go back</a></p>");
		?>
	</body>
</html>
