

<?php
	// Copied from updateDevice1.php and modified accordingly
	
	$refNo = $_POST['refNo']; 
	// $dsn = 'mysql:host=laureatestudentserver.com;dbname=laureate_mobiles';
	// $username = 'laureate_xxxx';
	// $password = 'yyyyy';
	// $dbc = new PDO($dsn, $username, $password);
	include("../../../connection.php");
	
	$query = "SELECT * FROM devices WHERE refNo = '$refNo'";
	
	$results = $dbc->query($query); 
	$rows = $results->rowCount();
	
	if ($rows > 0) { // if this reference number already exists in the database
		echo("<p><h2> This reference number already exists in the devices table!</h2></p>");
	      
	    // Add code to display existing record:
	    $deviceToAdd = $results->fetch();      
		$name = $deviceToAdd['name'];
		$deviceType = $deviceToAdd['deviceType'];
		$colour = $deviceToAdd['colour'];
		$stockLevel = $deviceToAdd['stockLevel'];
		$salesThisMonth = $deviceToAdd['salesThisMonth'];
		$customerRating = $deviceToAdd['customerRating'];
		
		// echo ("<p> $refNo $name $deviceType $colour</p>"); // ok for now, but delete after table display works
		

		// Add HTML code below for displaying row in table format:
		?>
		<!DOCTYPE html>
		<html>
			<head>
				<TITLE> Display existing record </TITLE>
				<meta charset="utf-8" />
				<link href="allDevices.css" type="text/css" rel="stylesheet" />
			</head>
			<body>
				<table border>
					<caption>The Existing Record with this Reference Number</caption>
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
							<?php echo $deviceToAdd['refNo']; ?>
						</td>
						<td class = "left">
							<?php echo $deviceToAdd['name']; ?>
						</td>
						<td class = "left">
							<?php echo $deviceToAdd['deviceType']; ?>
						</td>
						<td class = "left">
							<?php echo $deviceToAdd['colour']; ?>
						</td>
						<td class = "right">
							<?php echo $deviceToAdd['stockLevel']; ?>
						</td>
						<td class = "right">
							<?php echo $deviceToAdd['salesThisMonth']; ?>
						</td>
						<td class = "right">
							<?php echo $deviceToAdd['customerRating']; ?>
						</td>
					</tr>
				</table>
			</body>
		</html>
		
<?php
		// end of HTML code displaying row in table format
	    
	    echo("<p><a href='main-inc.html'>Go Back</a>");
		
	} else { 
	
		/*
		$deviceToAdd = $results->fetch();      
		$name = $deviceToAdd['name'];
		$deviceType = $deviceToAdd['deviceType'];
		$colour = $deviceToAdd['colour'];
		$stockLevel = $deviceToAdd['stockLevel'];
		$salesThisMonth = $deviceToAdd['salesThisMonth'];
		$customerRating = $deviceToAdd['customerRating'];
		*/
?>
		
		<!DOCTYPE html>
		<html>
			<head>
				<title> Update a Single Device's Details  </title>
				<meta charset="utf-8" />
			</head>
			<body>
			
				<p>
				<h2>Add New Device Form</h2>
				</p>
				      
				<form name="addNewDeviceForm" action="addNewDevice2.php"method="POST">
				
					<p>Reference Number <?php echo ($refNo) ?></p>
					
					Name <input type="text" name="name" size="20 "maxlength = "20">
					Device Type <input type="text" name="deviceType" size="10" maxlength = "10">
					Colour <input type="text" name="colour" size="10" maxlength = "10">
					Stock Level <input type="text" name="stockLevel" size="4" maxlength = "4">
					Sales This Month <input type="text" name="salesThisMonth" size="4" maxlength = "4">
					Customer Rating <input type="text" name="customerRating" size="1" maxlength = "1">
					<input type="hidden" name="refNo" value="<?php echo($refNo); ?>">
					<input type=submit value="Add new device">
				</form>
			</body>
		</html>
<?php
	}
	$dbc = null;
?>
