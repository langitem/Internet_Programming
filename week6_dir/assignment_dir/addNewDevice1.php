

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
	      echo("<p> This reference number already exists in the devices table!</p>");
	      
	      // Add code to display existing record:
	    $deviceToUpdate = $results->fetch();      
		$name = $deviceToUpdate['name'];
		$deviceType = $deviceToUpdate['deviceType'];
		$colour = $deviceToUpdate['colour'];
		$stockLevel = $deviceToUpdate['stockLevel'];
		$salesThisMonth = $deviceToUpdate['salesThisMonth'];
		$customerRating = $deviceToUpdate['customerRating'];
		
		echo ("<p> $refNo $name $deviceType $colour</p>");
	    
	    echo("<p><a href='main-inc.html'>Continue</a>");
	} else {
	
		/*
		$deviceToUpdate = $results->fetch();      
		$name = $deviceToUpdate['name'];
		$deviceType = $deviceToUpdate['deviceType'];
		$colour = $deviceToUpdate['colour'];
		$stockLevel = $deviceToUpdate['stockLevel'];
		$salesThisMonth = $deviceToUpdate['salesThisMonth'];
		$customerRating = $deviceToUpdate['customerRating'];
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
